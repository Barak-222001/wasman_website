@extends('layouts.admin')

@section('title', 'Membership Applications')

@section('content')
<div class="dashboard-page membership-admin-page">
    <section class="dashboard-hero">
        <div>
            <span class="section-kicker">MEMBERSHIP MANAGEMENT</span>
            <h1>Membership Applications</h1>
            <p>Review people applying to join WASMaN, search records and update application status.</p>
        </div>
    </section>

    <div class="dashboard-stats">
        <div class="stat-card">
            <div><span>TOTAL APPLICATIONS</span><strong>{{ $totalMemberships }}</strong><p>Membership submissions</p></div>
        </div>
        <div class="stat-card">
            <div><span>PENDING</span><strong>{{ $pendingMemberships }}</strong><p>Awaiting review</p></div>
        </div>
        <div class="stat-card">
            <div><span>APPROVED</span><strong>{{ $approvedMemberships }}</strong><p>Approved applications</p></div>
        </div>
    </div>

    <section class="application-card">
        <div class="application-card-header">
            <div>
                <span class="section-kicker">APPLICATION MANAGEMENT</span>
                <h2>Membership Applicants</h2>
                <p>Search, filter, review and manage membership applications.</p>
            </div>
        </div>

        @if(session('success'))
            <div class="admin-success-message">{{ session('success') }}</div>
        @endif

        <form method="GET" action="{{ route('admin.memberships') }}" class="application-filters">
            <div class="filter-search">
                <input type="text" name="search" value="{{ request('search') }}"
                       placeholder="Search name, email, institution...">
            </div>

            <div class="filter-select">
                <select name="join_as">
                    <option value="">All Join Options</option>
                    @foreach(['Student','Staff','Volunteer','Other'] as $option)
                        <option value="{{ $option }}" {{ request('join_as') === $option ? 'selected' : '' }}>
                            {{ $option }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="filter-select">
                <select name="status">
                    <option value="">All Statuses</option>
                    @foreach(['Pending','Approved','Declined'] as $option)
                        <option value="{{ $option }}" {{ request('status') === $option ? 'selected' : '' }}>
                            {{ $option }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="filter-select">
                <select name="sort">
                    <option value="newest" {{ request('sort', 'newest') === 'newest' ? 'selected' : '' }}>Newest First</option>
                    <option value="oldest" {{ request('sort') === 'oldest' ? 'selected' : '' }}>Oldest First</option>
                </select>
            </div>

            <button type="submit" class="filter-btn">Apply</button>
            <a href="{{ route('admin.memberships') }}" class="clear-filter-btn">Clear</a>
        </form>

        <div class="table-responsive">
            <table class="applications-table">
                <thead>
                    <tr>
                        <th>Applicant</th>
                        <th>Join As</th>
                        <th>Institution</th>
                        <th>Expertise / Study</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($memberships as $membership)
                        <tr>
                            <td>
                                <strong>{{ $membership->full_name }}</strong><br>
                                <small>{{ $membership->email }}<br>{{ $membership->phone }}</small>
                            </td>
                            <td>{{ $membership->join_as }}</td>
                            <td>{{ $membership->institution }}</td>
                            <td>{{ $membership->expertise }}</td>
                            <td><strong>{{ $membership->status }}</strong></td>
                            <td>{{ $membership->created_at->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('admin.memberships.show', $membership) }}" class="action-edit">View</a>
                                <form action="{{ route('admin.memberships.destroy', $membership) }}"
                                      method="POST" style="display:inline"
                                      onsubmit="return confirm('Delete this membership application?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="empty-table">
                                <strong>No membership applications found.</strong>
                                <p>New membership applications will appear here.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="pagination-wrapper">{{ $memberships->links() }}</div>
    </section>
</div>
@endsection
