<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Investigation Management Portal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar --> 
        @include('layouts.partials.sidebar')

        <!-- Main Content -->
        <main class="main-content">
            @include('layouts.partials.header')
            
            @yield('content')
            
            @include('layouts.partials.footer')
        </main>
    </div>
</body>
</html> 