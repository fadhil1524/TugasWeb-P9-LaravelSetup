<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Tugas P9') — {{ config('app.name') }}</title>
    {{-- BONUS: Tailwind via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen">
    <nav class="bg-indigo-600 text-white">
        <div class="max-w-3xl mx-auto px-4 py-3 flex gap-6 font-medium">
            <a href="{{ route('home') }}" class="hover:underline">Home</a>
            <a href="{{ route('about') }}" class="hover:underline">About</a>
            <a href="{{ route('contact') }}" class="hover:underline">Contact</a>
            <a href="{{ route('hello', 'dunia') }}" class="hover:underline">Hello</a>
        </div>
    </nav>
    <main class="max-w-3xl mx-auto px-4 py-10">
        @yield('content')
    </main>
    <footer class="text-center text-sm text-slate-500 py-6">
        Tugas Rutin 9 · Pemrograman Web · UNIMED
    </footer>
</body>
</html>
