<?php
namespace App\Http\Controllers;

use App\Models\PublishingItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class SectionPublishingController extends Controller
{
    private const SECTIONS = [
        'reports' => ['label'=>'Reports','path'=>'reports','view'=>'reports'],
        'news' => ['label'=>'News','path'=>'news','view'=>'news'],
        'events' => ['label'=>'Events','path'=>'events','view'=>'events'],
        'ongoing-projects' => ['label'=>'Ongoing Projects','path'=>'ongoing_projects','view'=>'ongoing_projects'],
        'completed-projects' => ['label'=>'Completed Projects','path'=>'completed_projects','view'=>'completed_projects'],
        'photos-videos' => ['label'=>'Photos & Videos','path'=>'photos_videos','view'=>'photos_videos'],
    ];
    private function section(string $section): array { abort_unless(isset(self::SECTIONS[$section]), 404); return self::SECTIONS[$section]; }
    private function disk(): string { return 'local'; } // private disk, never /storage URLs
    public function publicIndex(Request $request, string $section)
    {
        $config=$this->section($section);
        $query=PublishingItem::where('section',$section)->where('is_published',true);
        if ($request->filled('q')) {
            $term=mb_substr(trim((string)$request->query('q')),0,120);
            $query->where(function ($q) use ($term) { $q->where('title','like','%'.$term.'%')->orWhere('summary','like','%'.$term.'%')->orWhere('category','like','%'.$term.'%'); });
        }
        $publishedItems=$query->orderByDesc('published_at')->orderByDesc('id')->paginate(12)->withQueryString();
        return view($config['view'], ['publishedItems'=>$publishedItems,'publishingSection'=>$section,'publishingLabel'=>$config['label']]);
    }
    public function adminIndex(string $section)
    {
        $config=$this->section($section);
        $items=PublishingItem::where('section',$section)->latest()->paginate(20);
        return view('admin.publishing_items',['items'=>$items,'section'=>$section,'sectionLabel'=>$config['label']]);
    }
    public function store(Request $request, string $section)
    {
        $this->section($section);
        $data=$request->validate([
            'title'=>['required','string','max:255'],
            'summary'=>['nullable','string','max:3000'],
            'body'=>['nullable','string','max:40000'],
            'category'=>['nullable','string','max:100'],
            'author'=>['nullable','string','max:255'],
            'event_date'=>['nullable','date'],
            'cover'=>['nullable','image','mimes:jpeg,png,webp','max:5120'],
            'attachment'=>['nullable','file','mimes:pdf','max:20480'],
            'video_url'=>['nullable','url','max:2048','regex:/^https:\/\//i'],
            'publish'=>['nullable','boolean'],
        ]);
        $cover=null; $attachment=null;
        try {
            if ($request->hasFile('cover')) $cover=$request->file('cover')->store('wasman/'.$section.'/covers',$this->disk());
            if ($request->hasFile('attachment')) $attachment=$request->file('attachment')->store('wasman/'.$section.'/files',$this->disk());
            if ($section==='reports' && !$attachment) {
                throw \Illuminate\Validation\ValidationException::withMessages(['attachment'=>'A PDF is required for reports.']);
            }
            if ($section==='photos-videos' && !$cover && empty($data['video_url'])) {
                throw \Illuminate\Validation\ValidationException::withMessages(['cover'=>'Upload a photo or provide a secure video link.']);
            }
            $published=$request->boolean('publish');
            PublishingItem::create([
                'section'=>$section,'title'=>$data['title'],'summary'=>$data['summary']??null,
                'body'=>$data['body']??null,'category'=>$data['category']??null,'author'=>$data['author']??null,
                'event_date'=>$data['event_date']??null,'cover_path'=>$cover,'file_path'=>$attachment,
                'video_url'=>$data['video_url']??null,'is_published'=>$published,'published_at'=>$published?now():null,
            ]);
        } catch (\Throwable $e) {
            if ($cover) Storage::disk($this->disk())->delete($cover);
            if ($attachment) Storage::disk($this->disk())->delete($attachment);
            throw $e;
        }
        return redirect()->route('wasman.publish.admin',['section'=>$section])->with('success','Content saved.');
    }
    public function update(Request $request, string $section, PublishingItem $item)
    {
        $this->assertSection($section,$item);
        $data=$request->validate([
            'title'=>['required','string','max:255'], 'summary'=>['nullable','string','max:3000'],
            'body'=>['nullable','string','max:40000'], 'category'=>['nullable','string','max:100'],
            'author'=>['nullable','string','max:255'], 'event_date'=>['nullable','date'],
            'video_url'=>['nullable','url','max:2048','regex:/^https:\/\//i'],
        ]);
        $item->update($data);
        return back()->with('success','Content updated.');
    }
    private function assertSection(string $section, PublishingItem $item): void { $this->section($section); abort_unless($item->section===$section,404); }
    public function status(Request $request, string $section, PublishingItem $item)
    {
        $this->assertSection($section,$item);
        $request->validate(['publish'=>['required','boolean']]);
        $publish=$request->boolean('publish');
        $item->update(['is_published'=>$publish,'published_at'=>$publish?($item->published_at??now()):null]);
        return back()->with('success',$publish?'Published.':'Unpublished.');
    }
    public function destroy(string $section, PublishingItem $item)
    {
        $this->assertSection($section,$item);
        $paths=array_filter([$item->cover_path,$item->file_path]);
        $item->delete();
        if ($paths) Storage::disk($this->disk())->delete($paths);
        return back()->with('success','Content deleted.');
    }
    public function file(string $section, PublishingItem $item, string $kind)
    {
        $this->assertSection($section,$item);
        abort_unless($item->is_published,404);
        abort_unless(in_array($kind,['cover','read','download'],true),404);
        $path=$kind==='cover'?$item->cover_path:$item->file_path;
        abort_unless($path && Storage::disk($this->disk())->exists($path),404);
        if ($kind==='download') return Storage::disk($this->disk())->download($path,'WASMaN-'.$section.'-'.$item->id.'.pdf');
        if ($kind==='read') return Storage::disk($this->disk())->response($path,null,['Content-Type'=>'application/pdf','Content-Disposition'=>'inline']);
        return Storage::disk($this->disk())->response($path);
    }
}
