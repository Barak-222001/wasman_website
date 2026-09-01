<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Admin Login | WASMAN</title>

    <link
        rel="stylesheet"
        href="{{ asset('css/admin.css') }}"
    >
</head>

<body class="login-page">

    <div class="login-container">

        <div class="login-card">

            <div class="login-brand">

                <h1>WASMAN</h1>

                <p>
                    Administration Portal
                </p>

            </div>


            <div class="login-heading">

                <h2>Welcome Back</h2>

                <p>
                    Sign in to manage applications and website activities.
                </p>

            </div>


            <form action="/login" method="POST">

                @csrf


                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        required
                    >

                    @error('email')
                        <span class="form-error">
                            {{ $message }}
                        </span>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    >

                </div>


                <button
                    type="submit"
                    class="login-button"
                >
                    Sign In
                </button>

            </form>


            <div class="login-footer">

                <p>
                    Women in Aquatic Science and Management Network
                </p>

            </div>

        </div>

    </div>

</body>

</html>