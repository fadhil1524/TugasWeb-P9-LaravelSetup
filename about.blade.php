@extends('layouts.app')
@section('title', 'About')
@section('content')
    <h1 class="text-3xl font-bold mb-4">Tentang Saya</h1>
    <p>Nama: <strong>{{ $nama }}</strong></p>
    <p>Kampus: {{ $kampus }}</p>
    <p class="mb-6">Prodi: {{ $prodi }}</p>

    <h2 class="text-xl font-semibold mb-2">Skill</h2>
    <ul class="list-disc ml-6">
        @foreach ($skills as $s)
            <li>{{ $s }}</li>
        @endforeach
    </ul>
@endsection
