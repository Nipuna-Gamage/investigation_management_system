<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>State Ministry of Home Affairs - Login</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <div class="login-section">
            <div class="background-circle"></div>
            <div class="background-circle2"></div>
            <div class="login-card">
                <h2>Welcome back!</h2>
                <p>Enter your Credentials to access your account</p>
                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="form-group">
                        <label for="user_name">Username</label>
                        <input type="text" id="user_name" name="user_name" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="login-button">Login</button>
                </form>
            </div>
        </div>
        <div class="ministry-section">
            <div class="ministry-card">
                <img src="{{ asset('img/ministry-logo.png') }}" alt="sri Lanka government Logo" class="ministry-logo">
                <h1 class="ministry-title">State Ministry of Home Affairs</h1>
                <p class="portal-subtitle">Investigation Management Portal</p>
            </div>
        </div>
    </div>
</body>
</html>