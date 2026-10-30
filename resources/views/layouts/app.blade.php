<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="body font-sans">
    <div class="min-h-screen flex flex-col">
 
        @include('partials.navbar')
 
        <main class="flex-grow">
            @yield('content')
        </main>
 
        @include('partials.footer')
 
    </div>
 
    <script>
        const menu = document.getElementById('collapseMenu');
        toggleOpen.onclick = () => menu.classList.replace('hidden', 'max-lg:block');
        toggleClose.onclick = () => menu.classList.replace('max-lg:block', 'hidden');
    </script>
</body>
</html>