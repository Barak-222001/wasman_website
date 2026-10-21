@extends('layouts.admin')
@section('title', 'Homepage Research Spotlight')
@section('content')
<style>
.hs-admin{max-width:1040px;margin:auto;color:#123c4b}.hs-panel{background:#fff;border:1px solid #d8e9ea;padding:26px;border-radius:18px;margin:18px 0;box-shadow:0 8px 28px #073f5011}.hs-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px}.hs-field{display:flex;flex-direction:column;gap:7px}.hs-field label{font-weight:700;font-size:14px}.hs-field input,.hs-field textarea{width:100%;border:1px solid #aebfc4;border-radius:9px;padding:11px;font:inherit;color:#123c4b}.hs-field textarea{min-height:110px}.hs-full{grid-column:1/-1}.hs-btn{background:#087f9c;color:white;border:0;padding:11px 19px;border-radius:9px;font-weight:700;cursor:pointer}.hs-muted{color:#526b70;font-size:14px}.hs-item{display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;gap:12px;padding:16px 0;border-top:1px solid #e2ebee}.hs-actions{display:flex;gap:10px;flex-wrap:wrap}.hs-danger{background:#a32d35}.hs-errors{color:#942c31}@media(max-width:700px){.hs-grid{grid-template-columns:1fr}.hs-panel{padding:18px}}
</style>
<div class="hs-admin">
<h2>Manage Homepage Research Spotlight</h2>
<p class="hs-muted">Only one spotlight appears on the homepage at a time. Save a draft, or immediately feature a publication. Previous uploads remain available for reuse.</p>
@if(session('success'))<div class="hs-panel" role="status">{{session('success')}}</div>@endif
@if($errors->any())<div class="hs-panel hs-errors" role="alert"><strong>Please correct these fields:</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
<div class="hs-panel"><h3>Add Research Spotlight</h3>
<form method="POST" action="{{ route('admin.homepage-spotlights.store') }}" enctype="multipart/form-data">
@csrf
<div class="hs-grid">
<div class="hs-field hs-full"><label for="hs-heading">Section heading</label><input id="hs-heading" name="heading" value="{{ old('heading', 'Featured Research') }}" maxlength="200" required></div>
<div class="hs-field hs-full"><label for="hs-intro">Short introductory line</label><textarea id="hs-intro" name="intro" maxlength="1000" required>{{ old('intro', 'Explore the research summary flyer or read the complete illustrated article.') }}</textarea></div>
<div class="hs-field hs-full"><label for="hs-title">Research title</label><input id="hs-title" name="title" value="{{old('title')}}" maxlength="255" required></div>
<div class="hs-field hs-full"><label for="hs-authors">Author(s)</label><input id="hs-authors" name="authors" value="{{old('authors')}}" maxlength="255" placeholder="e.g. Dr. A and Ms B" required></div>
<div class="hs-field hs-full"><label for="hs-description">Research description</label><textarea id="hs-description" name="description" maxlength="2500" required>{{old('description')}}</textarea></div>
<div class="hs-field"><label for="hs-flyer">Flyer image (JPG, PNG, WebP; max 8MB)</label><input type="file" id="hs-flyer" name="flyer" accept="image/jpeg,image/png,image/webp" required></div>
<div class="hs-field"><label for="hs-article">Full article (PDF; max 20MB)</label><input type="file" id="hs-article" name="article" accept="application/pdf" required></div>
<div class="hs-field hs-full"><label><input type="checkbox" name="publish_now" value="1" {{old('publish_now')?'checked':''}}> Feature on homepage immediately</label></div>
</div>
<button class="hs-btn" type="submit">Save Research Spotlight</button>
</form></div>
<div class="hs-panel"><h3>Saved Research Spotlights</h3>
@forelse($spotlights as $spotlight)
<div class="hs-item"><div><strong>{{ $spotlight->title }}</strong><div class="hs-muted">{{ $spotlight->authors }} · {{ $spotlight->is_featured ? 'Currently featured on homepage' : 'Not featured' }}</div></div>
<div class="hs-actions">@unless($spotlight->is_featured)<form method="POST" action="{{route('admin.homepage-spotlights.feature',$spotlight)}}">@csrf @method('PATCH')<button type="submit" class="hs-btn">Feature this</button></form>@endunless
<form method="POST" action="{{route('admin.homepage-spotlights.destroy',$spotlight)}}" onsubmit="return confirm('Delete this spotlight and its files permanently?')">@csrf @method('DELETE')<button type="submit" class="hs-btn hs-danger">Delete</button></form></div></div>
@empty<p class="hs-muted">No uploaded research spotlights yet. The existing Fetu Afahye research remains on the homepage until you feature a new one.</p>@endforelse
{{ $spotlights->links() }}</div>
</div>
@endsection
