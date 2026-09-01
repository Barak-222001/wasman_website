<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>@yield('title', 'Dashboard') | WASMAN Admin</title>


    {{-- WASMAN ADMIN STYLESHEET --}}

    <link
        rel="stylesheet"
        href="{{ asset('css/admin.css') }}"
    >
    @stack('styles')

</head>


<body class="admin-page">


<div class="admin-wrapper">


    {{-- ============================================
        SIDEBAR
    ============================================= --}}

    <aside class="admin-sidebar">


        {{-- BRAND --}}

        <div class="sidebar-brand">

            <div class="brand-mark">
                W
            </div>


            <div>

                <h2>
                    WASMAN
                </h2>

                <p>
                    Administration
                </p>

            </div>

        </div>



        {{-- NAVIGATION LABEL --}}

        <div class="sidebar-section-label">
            Workspace
        </div>



        {{-- NAVIGATION --}}

        <nav class="sidebar-nav">


                <a
                    href="{{ route('admin.dashboard') }}"
                    class="sidebar-link"
                >

                <span class="nav-icon">
                    ◫
                </span>

                <span>
                    Overview
                </span>

            </a>



                    <a
                href="{{ route('admin.dashboard') }}"
                class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
            >

                <span class="nav-icon">
                    ◉
                </span>

                <span>
                    Internships
                </span>

            </a>


            <a
                href="{{ route('admin.volunteers') }}"
                class="sidebar-link {{ request()->routeIs('admin.volunteers') || request()->routeIs('volunteers.*') ? 'active' : '' }}"
            >

                <span class="nav-icon">
                    ◇
                </span>

                <span>
                    Volunteers
                </span>

            </a>


<a
    href="{{ route('admin.research-assistants') }}"
    class="sidebar-link {{ request()->routeIs('admin.research-assistants') || request()->routeIs('research-assistants.*') ? 'active' : '' }}"
>

    <span class="nav-icon">
        ✦
    </span>

    <span>
        Research Assistants
    </span>

</a>
            


        </nav>



        {{-- ============================================
            SIDEBAR BOTTOM
        ============================================= --}}

        <div class="sidebar-bottom">


            {{-- ADMIN PROFILE --}}

            <div class="sidebar-profile">


                <div class="sidebar-profile-avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>


                <div>

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <span>
                        Administrator
                    </span>

                </div>


            </div>



            {{-- LOGOUT --}}

            <form
                action="{{ route('logout') }}"
                method="POST"
            >

                @csrf


                <button
                    type="submit"
                    class="sidebar-logout"
                >
                    Sign Out
                </button>


            </form>


        </div>


    </aside>



    {{-- ============================================
        MAIN ADMIN AREA
    ============================================= --}}

    <main class="admin-main">


        {{-- TOP BAR --}}

        <header class="admin-topbar">


            <div>

                <p class="topbar-label">
                    WASMAN Administration
                </p>


                <h1>
                    @yield('title', 'Dashboard')
                </h1>

            </div>



            {{-- TOP RIGHT USER --}}

            <div class="admin-user">


                <div class="user-avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>


                <div class="user-details">

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <span>
                        Administrator
                    </span>

                </div>


            </div>


        </header>



        {{-- ============================================
            PAGE CONTENT
        ============================================= --}}

        <section class="admin-content">

            @yield('content')

        </section>


    </main>


</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@stack('scripts')


</body>

</html>