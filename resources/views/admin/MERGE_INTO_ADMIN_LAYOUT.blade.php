{{-- ADD THIS TO resources/views/layouts/admin.blade.php WITH THE OTHER SIDEBAR LINKS --}}
<a href="{{ route('admin.memberships') }}"
   class="{{ request()->routeIs('admin.memberships*') ? 'active' : '' }}">
    <span class="nav-icon">👥</span>
    <span>Membership Applications</span>
</a>

{{-- ALSO ADD THIS IN THE <head>, AFTER admin.css --}}
<link rel="stylesheet" href="{{ asset('css/admin-memberships.css') }}">
