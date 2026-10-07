@extends('layouts.admin')
@section('title','Research Spotlight Application')
@section('content')
<div class="rs-admin">
@if(session('success'))<div class="rs-alert">{{ session('success') }}</div>@endif
<div class="rs-detail-head"><div><span>RESEARCH SPOTLIGHT APPLICATION</span><h1>{{ $application->full_name }}</h1><p>{{ $application->research_title }}</p></div><a href="{{ route('admin.research-spotlight.index') }}" class="rs-back">← Back</a></div>
<section class="rs-detail-card">
@if($application->photo)
<div class="rs-photo-block">
    <img src="{{ route('admin.research-spotlight.photo', $application) }}" alt="{{ $application->full_name }}">
    <div><span>PRESENTER PHOTOGRAPH</span><strong>{{ $application->full_name }}</strong>
    <a href="{{ route('admin.research-spotlight.photo', $application) }}" target="_blank">View Full Photograph</a></div>
</div>
@endif
<div class="rs-detail-grid">
<div><span>Email</span><strong>{{ $application->email }}</strong></div><div><span>Phone</span><strong>{{ $application->phone }}</strong></div>
<div><span>Institution</span><strong>{{ $application->institution }}</strong></div><div><span>Position / Role</span><strong>{{ $application->position }}</strong></div>
<div><span>Country</span><strong>{{ $application->country }}</strong></div><div><span>Focus Area</span><strong>{{ $application->focus_area }}</strong></div>
</div>
<div class="rs-long"><span>Research Title</span><p>{{ $application->research_title }}</p></div>
<div class="rs-long"><span>Research Summary</span><p>{{ $application->research_summary }}</p></div>
<div class="rs-long"><span>Why they want to feature</span><p>{{ $application->motivation }}</p></div>
@if($application->profile_link)<div class="rs-long"><span>Professional / Research Profile</span><p><a href="{{ $application->profile_link }}" target="_blank" rel="noopener">{{ $application->profile_link }}</a></p></div>@endif
<div class="rs-actions">
<form action="{{ route('admin.research-spotlight.status',$application) }}" method="POST">@csrf @method('PATCH')<label>Status</label><select name="status">@foreach(['Pending','Approved','Declined'] as $s)<option value="{{ $s }}" {{ $application->status===$s?'selected':'' }}>{{ $s }}</option>@endforeach</select><button type="submit">Update Status</button></form>
<form action="{{ route('admin.research-spotlight.destroy',$application) }}" method="POST" onsubmit="return confirm('Delete this Research Spotlight application?')">@csrf @method('DELETE')<button type="submit" class="rs-delete">Delete Application</button></form>
</div></section></div>
@endsection
