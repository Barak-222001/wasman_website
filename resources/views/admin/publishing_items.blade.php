@extends('layouts.admin')
@section('title', 'Manage '.$sectionLabel)
@section('content')
<div style="max-width:1100px;margin:24px auto;padding:0 14px;font-family:Manrope,Arial,sans-serif;">
 <header style="background:linear-gradient(120deg,#052f43,#087f9c);color:white;padding:28px;border-radius:18px;margin-bottom:22px;">
  <h1 style="color:white">{{ $sectionLabel }} Management</h1><p>Add content, save drafts, and publish to the public WASMaN website.</p>
 </header>
 @if(session('success'))<p role="status" style="background:#e4f8ea;padding:14px;">{{ session('success') }}</p>@endif
 @if($errors->any())<div role="alert" style="background:#fff0ee;padding:14px;"><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
 <section style="background:white;border:1px solid #dae9ec;border-radius:15px;padding:24px;margin-bottom:25px;">
  <h2>Add {{ $sectionLabel }} item</h2>
  <form method="POST" action="{{ route('wasman.publish.store',['section'=>$section]) }}" enctype="multipart/form-data" style="display:grid;gap:14px;max-width:850px;">@csrf
   <label>Title *<input required maxlength="255" name="title" value="{{ old('title') }}" style="display:block;width:100%;padding:10px;box-sizing:border-box"></label>
   <label>Summary<textarea maxlength="3000" name="summary" rows="3" style="display:block;width:100%;padding:10px;box-sizing:border-box">{{ old('summary') }}</textarea></label>
   <label>Full story / project details<textarea maxlength="40000" name="body" rows="6" style="display:block;width:100%;padding:10px;box-sizing:border-box">{{ old('body') }}</textarea></label>
   <label>Category<input maxlength="100" name="category" value="{{ old('category') }}" style="display:block;width:100%;padding:10px;box-sizing:border-box"></label>
   <label>Author / organizer / institution<input maxlength="255" name="author" value="{{ old('author') }}" style="display:block;width:100%;padding:10px;box-sizing:border-box"></label>
   <label>Event / project date<input type="date" name="event_date" value="{{ old('event_date') }}" style="display:block;padding:10px"></label>
   <label>Cover / photo (JPG, PNG, WebP; up to 5 MB)<input type="file" accept="image/jpeg,image/png,image/webp" name="cover"></label>
   <label>PDF attachment (up to 20 MB){{ $section === 'reports' ? ' * Required for reports' : '' }}<input type="file" accept="application/pdf,.pdf" name="attachment" {{ $section === 'reports' ? 'required' : '' }}></label>
   <label>Video URL (HTTPS only, optional)<input type="url" name="video_url" value="{{ old('video_url') }}" placeholder="https://..." style="display:block;width:100%;padding:10px;box-sizing:border-box"></label>
   <label><input type="checkbox" name="publish" value="1" {{ old('publish') ? 'checked' : '' }}> Publish now (unchecked = draft)</label>
   <button type="submit" style="background:#087f9c;color:white;border:0;border-radius:22px;padding:13px 20px;justify-self:start;cursor:pointer">Save item</button>
  </form>
 </section>
 <section style="background:white;border:1px solid #dae9ec;border-radius:15px;padding:24px;">
 <h2>Manage {{ $sectionLabel }}</h2>
 @forelse($items as $item)
  <article style="border-top:1px solid #dae9ec;padding:16px 0;">
   <strong>{{ $item->title }}</strong> <small>({{ $item->is_published ? 'Published' : 'Draft' }})</small>
   <form method="POST" action="{{ route('wasman.publish.update',['section'=>$section,'item'=>$item]) }}" style="display:grid;gap:8px;max-width:790px;margin:12px 0">@csrf @method('PUT')
    <label>Title <input name="title" required maxlength="255" value="{{ $item->title }}" style="width:100%;box-sizing:border-box"></label>
    <label>Summary <textarea name="summary" rows="2" maxlength="3000" style="width:100%;box-sizing:border-box">{{ $item->summary }}</textarea></label>
    <label>Body <textarea name="body" rows="3" maxlength="40000" style="width:100%;box-sizing:border-box">{{ $item->body }}</textarea></label>
    <label>Category <input name="category" maxlength="100" value="{{ $item->category }}"></label>
    <label>Author <input name="author" maxlength="255" value="{{ $item->author }}"></label>
    <label>Date <input type="date" name="event_date" value="{{ $item->event_date?->format('Y-m-d') }}"></label>
    <label>Video URL <input type="url" name="video_url" value="{{ $item->video_url }}" style="width:100%;box-sizing:border-box"></label>
    <button type="submit" style="justify-self:start">Save edits</button>
   </form>
   <form method="POST" action="{{ route('wasman.publish.status',['section'=>$section,'item'=>$item]) }}" style="display:inline-block;margin-right:8px">@csrf @method('PATCH')<input type="hidden" name="publish" value="{{ $item->is_published ? 0 : 1 }}"><button type="submit">{{ $item->is_published ? 'Unpublish' : 'Publish' }}</button></form>
   <form method="POST" action="{{ route('wasman.publish.destroy',['section'=>$section,'item'=>$item]) }}" style="display:inline-block" onsubmit="return confirm('Delete this item and its files permanently?')">@csrf @method('DELETE')<button type="submit">Delete</button></form>
  </article>
 @empty<p>No items uploaded yet.</p>@endforelse
 {{ $items->links() }}
 </section>
</div>
@endsection
