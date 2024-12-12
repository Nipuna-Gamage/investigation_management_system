<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Login</title>
    @vite(['resources/css/login.css'])
</head>
<body>
    <div class="container">
        <div class="login-section">
            <div class="background-circle"></div>
            <div class="background-circle2"></div>
            <div class="login-card">
                <h2>Welcome back!</h2>
                <p>Enter your Credentials to access your account</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                        @error('username')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="login-button">Login</button>
                </form>
            </div>
        </div>
        <div class="ministry-section">
            <div class="ministry-card">
                <img src="{{ asset('img/ministry-logo.png') }}" alt="Sri Lanka Government Logo" class="ministry-logo">
                <h1 class="ministry-title">State Ministry of Home Affairs</h1>
                <p class="portal-subtitle">Investigation Management Portal</p>
            </div>
        </div>
    </div>
</body>
</html>
