<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MiCourse - Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Changed background color */
        }

        .container {
            padding-top: 60px;
            margin-bottom: 5%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Center the form vertically */
        }

        .card-register {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Adjusted maximum width */
            background: #fff;
            padding: 1.5em;
            border-radius: 15px;
            text-align: center;
        }

        .card-header {
            font-size: 24px;
            border-bottom: 1px solid #4D4C7D;
            padding: 0.5em 0;
            color: #4D4C7D;
        }

        .card-body {
            padding: 2em;
        }

        .form-register {
            width: 100%;
        }

        .form-input,
        .form-select {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #4D4C7D;
            margin-bottom: 1em;
            box-sizing: border-box;
        }

        .btn-register {
            width: 100%;
            background-color: #555843;
            border: none;
            padding: 10px;
            border-radius: 8px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-register:hover {
            background-color: #837862;
        }

        .btn-have {
            text-decoration: none;
            color: #6c757d;
        }

        .btn-have:hover {
            color: #005bab;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card card-register">
            <div class="card-header">REGISTRATION</div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" class="form-register">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" class="form-control form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email" class="form-control form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select id="role" class="form-control form-select" name="role">
                            <option value="select"> </option>
                            <option value="pengajar">Pengajar</option>
                            <option value="siswa">Siswa</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control form-input" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <button type="submit" class="btn btn-primary btn-register">{{ __('Register') }}</button>

                    <div class="mt-3">
                        Already have an account? <a href="{{ route('login') }}" class="btn-have">Login here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
