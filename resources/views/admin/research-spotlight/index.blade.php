@extends('layouts.admin')
@section('title','Research Spotlight')
@section('content')
<div class="rs-admin">
<div class="rs-admin-head"><div><span>PROJECTS</span><h1>Research Spotlight</h1><p>Review and manage presenter submissions.</p></div>
<div class="rs-stats"><div><strong>{{ $total }}</strong><span>Total</span></div><div><strong>{{ $pending }}</strong><span>Pending</span></div><div><strong>{{ $approved }}</strong><span>Approved</span></div></div></div>
@if(session('success'))<div class="rs-alert">{{ session('success') }}</div>@endif
<form method="GET" class="rs-filter">
<input name="search" value="{{ request('search') }}" placeholder="Search name, email, institution or research">
<select name="status"><option value="">All statuses</option>@foreach(['Pending','Approved','Declined'] as $s)<option value="{{ $s }}" {{ request('status')===$s?'selected':'' }}>{{ $s }}</option>@endforeach</select>
<select name="sort"><option value="newest" {{ request('sort')!=='oldest'?'selected':'' }}>Newest</option><option value="oldest" {{ request('sort')==='oldest'?'selected':'' }}>Oldest</option></select>
<button>Filter</button><a href="{{ route('admin.research-spotlight.index') }}">Clear</a>
</form>
<div class="rs-table-wrap"><table class="rs-table"><thead><tr><th>Presenter</th><th>Institution</th><th>Research</th><th>Focus Area</th><th>Status</th><th></th></tr></thead><tbody>
@forelse($applications as $application)
<tr><td><strong>{{ $application->full_name }}</strong><small>{{ $application->email }}</small></td><td>{{ $application->institution }}</td><td>{{ \Illuminate\Support\Str::limit($application->research_title,55) }}</td><td>{{ $application->focus_area }}</td><td><span class="rs-status rs-{{ strtolower($application->status) }}">{{ $application->status }}</span></td><td><a class="rs-view" href="{{ route('admin.research-spotlight.show',$application) }}">View</a></td></tr>
@empty<tr><td colspan="6" class="rs-empty">No Research Spotlight submissions found.</td></tr>@endforelse
</tbody></table></div><div class="rs-pagination">{{ $applications->links() }}</div></div>
@endsection
