{{-- Dynamically published items. Existing public template/CSS left unchanged. --}}
@if(isset($publishedItems))
<section id="wasman-live-content" style="padding:55px 6%;background:#f5fafb;color:#073448">
 <div style="max-width:1200px;margin:auto">
  <h2 style="font-size:clamp(24px,3vw,36px);color:#073448">Latest {{ $publishingLabel }}</h2>
  <form action="" method="GET" style="margin:18px 0;display:flex;gap:10px;flex-wrap:wrap">
   <input name="q" value="{{ request('q') }}" placeholder="Search {{ $publishingLabel }}" aria-label="Search published content" style="flex:1;min-width:200px;padding:12px;border:1px solid #b0cfd7;border-radius:8px">
   <button type="submit" style="background:#087f9c;color:white;border:none;padding:12px 20px;border-radius:8px">Search</button>
  </form>
  @if($publishedItems->count())
   <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:20px">
    @foreach($publishedItems as $item)
     <article style="background:#fff;border:1px solid #dae9ec;border-radius:15px;overflow:hidden;box-shadow:0 7px 22px #052f4312">
      @if($item->cover_path)<img src="{{ route('wasman.publish.file',['section'=>$publishingSection,'item'=>$item,'kind'=>'cover']) }}" alt="{{ $item->title }}" loading="lazy" style="width:100%;height:200px;object-fit:cover">@endif
      <div style="padding:20px"><small>{{ $item->category }}</small><h3 style="color:#073448">{{ $item->title }}</h3>
       @if($item->event_date)<p>{{ $item->event_date->format('j M Y') }}</p>@endif
       @if($item->summary)<p>{{ $item->summary }}</p>@endif
       @if($item->body)<details><summary>Read details</summary><p style="white-space:pre-line">{{ $item->body }}</p></details>@endif
       @if($item->file_path)
        <a href="{{ route('wasman.publish.file',['section'=>$publishingSection,'item'=>$item,'kind'=>'read']) }}" target="_blank" rel="noopener">Read PDF</a>
        &nbsp; <a href="{{ route('wasman.publish.file',['section'=>$publishingSection,'item'=>$item,'kind'=>'download']) }}">Download</a>
       @endif
       @if($item->video_url)<p><a href="{{ $item->video_url }}" target="_blank" rel="noopener noreferrer">Watch video</a></p>@endif
      </div>
     </article>
    @endforeach
   </div>
   <div style="margin-top:22px">{{ $publishedItems->links() }}</div>
  @else<p>No published {{ strtolower($publishingLabel) }} available yet.</p>@endif
 </div>
</section>
@endif
