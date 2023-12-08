<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Learning - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card-login {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            background: #fff;
            padding: 1.5em;
            border-radius: 15px;
            text-align: center;
        }

        .card-header {
            font-size: 24px;
            border-bottom: 1px solid #4D4C7D;
            padding: 0.5em 0;
            color: #555843;
        }

        .card-body {
            padding: 1em;
        }

        .form-login {
            width: 100%;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #4D4C7D;
            margin-bottom: 1em;
            box-sizing: border-box;
        }

        .form-check-label {
            margin-left: 0.2em;
        }

        .btn-login {
            width: 100%;
            background-color: #555843;
            border: none;
            padding: 10px;
            border-radius: 8px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #837862;
        }

        .btn-forgot,
        .btn-dont {
            text-decoration: none;
            color: #6c757d;
        }

        .btn-dont:hover {
            color: #005bab;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card-login">
            <div class="col-1">
                <p class="text-center mt-3">
                    <a href="/" class="text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" style="fill: rgb(58, 26, 26);">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                    </a>
                </p>
            </div>
            <div class="card-header">LOGIN</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="form-login">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email" class="form-control form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-login">{{ __('Login') }}</button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link btn-forgot" href="{{ route('password.request') }}">Forgot Your Password?</a>
                    @endif

                    <div class="mt-3 text-center">
                        Don't have an account? <a href="{{ route('register') }}" class="btn-dont">Register here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
