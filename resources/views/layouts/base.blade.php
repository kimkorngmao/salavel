<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Salavel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body>
    <div class="flex flex-col h-screen">
        <!-- Navigation Bar -->
        @include('layouts.navbar')        

        <!-- Main Content Area -->
        <main class="flex-grow px-4 py-6 w-full max-w-7xl mx-auto">
            @yield('container')
        </main>

        <!-- Footer -->
        @include('layouts.footer')
    </div>

    @stack('scripts')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>