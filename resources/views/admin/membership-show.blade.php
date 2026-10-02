@extends('layouts.admin')

@section('title', 'Membership Application')

@section('content')
<div class="dashboard-page membership-admin-page">
    <section class="dashboard-hero">
        <div>
            <span class="section-kicker">MEMBERSHIP APPLICATION</span>
            <h1>{{ $membership->full_name }}</h1>
            <p>Full membership application record.</p>
        </div>
    </section>

    @if(session('success'))
        <div class="admin-success-message">{{ session('success') }}</div>
    @endif

    <section class="application-card">
        <div class="membership-admin-detail-grid">
            <div><span>Full Name</span><strong>{{ $membership->full_name }}</strong></div>
            <div><span>Date of Birth</span><strong>{{ optional($membership->date_of_birth)->format('d M Y') }}</strong></div>
            <div><span>Gender</span><strong>{{ $membership->gender }}</strong></div>
            <div><span>Phone</span><strong>{{ $membership->phone }}</strong></div>
            <div><span>Email</span><strong>{{ $membership->email }}</strong></div>
            <div><span>Address / Location</span><strong>{{ $membership->address }}</strong></div>
            <div><span>Occupation / Position</span><strong>{{ $membership->occupation }}</strong></div>
            <div><span>Institution / Organisation</span><strong>{{ $membership->institution }}</strong></div>
            <div><span>Area of Expertise / Study</span><strong>{{ $membership->expertise }}</strong></div>
            <div><span>Education</span><strong>{{ $membership->education }}</strong></div>
            <div><span>Join As</span><strong>{{ $membership->join_as }}{{ $membership->join_as_other ? ' — '.$membership->join_as_other : '' }}</strong></div>
            <div><span>Membership Type</span><strong>{{ $membership->membership_type ?: 'To be confirmed' }}</strong></div>
        </div>

        <div class="membership-admin-long">
            <span>Why the applicant wants to join</span>
            <p>{{ $membership->interest }}</p>
        </div>

        <div class="membership-admin-long">
            <span>How the applicant would like to contribute</span>
            @if(!empty($membership->contribution))
                <ul>
                    @foreach($membership->contribution as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            @else
                <p>Not specified.</p>
            @endif
            @if($membership->contribution_other)
                <p><strong>Other:</strong> {{ $membership->contribution_other }}</p>
            @endif
        </div>

        <div class="membership-admin-status">
            <form action="{{ route('admin.memberships.status', $membership) }}" method="POST">
                @csrf
                @method('PATCH')
                <label for="status">Application Status</label>
                <select name="status" id="status">
                    @foreach(['Pending','Approved','Declined'] as $status)
                        <option value="{{ $status }}" {{ $membership->status === $status ? 'selected' : '' }}>
                            {{ $status }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="filter-btn">Update Status</button>
            </form>
        </div>

        <div class="membership-back">
            <a href="{{ route('admin.memberships') }}" class="clear-filter-btn">← Back to Membership Applications</a>
        </div>
    </section>
</div>
@endsection
