@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1 class="text-3xl font-bold mb-2">Halo, {{ $nama }}! 👋</h1>
    <p class="mb-6 text-slate-600">NIM {{ $nim }} · Kelas {{ $kelas }}</p>

    <h2 class="text-xl font-semibold mb-2">Yang sedang saya pelajari:</h2>
    <ul class="list-disc ml-6 space-y-1">
        @foreach ($courses as $c)
            <li>{{ $c }}</li>
        @endforeach
    </ul>
@endsection
