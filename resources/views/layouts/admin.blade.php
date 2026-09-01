<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>@yield('title') | WASMAN Admin</title>

    <link
        rel="stylesheet"
        href="{{ asset('css/admin.css') }}"
    >
</head>

<body class="admin-page">

    <div class="admin-wrapper">

        <aside class="admin-sidebar">

            <div class="sidebar-brand">
                <h2>WASMAN</h2>
                <p>Admin Portal</p>
            </div>


            <nav class="sidebar-nav">

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="sidebar-link active"
                >
                    Dashboard
                </a>

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="sidebar-link"
                >
                    Internship Applications
                </a>

                <a
                    href="#"
                    class="sidebar-link disabled-link"
                >
                    Volunteer Applications
                </a>

                <a
                    href="#"
                    class="sidebar-link disabled-link"
                >
                    Research Assistant
                </a>

            </nav>


            <div class="sidebar-footer">

                <form
                    action="{{ route('logout') }}"
                    method="POST"
                >
                    @csrf

                    <button
                        type="submit"
                        class="sidebar-logout"
                    >
                        Logout
                    </button>

                </form>

            </div>

        </aside>


        <main class="admin-main">

            <header class="admin-topbar">

                <div>

                    <p class="topbar-label">
                        Administration
                    </p>

                    <h1>
                        @yield('title')
                    </h1>

                </div>


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


            <section class="admin-content">

                @yield('content')

            </section>

        </main>

    </div>

</body>

</html>