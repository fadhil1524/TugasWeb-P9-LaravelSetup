@extends('layouts.app')
@section('title', 'Hello')
@section('content')
    <h1 class="text-4xl font-bold">Hello, {{ $nama }}! 🎉</h1>
    <p class="mt-3 text-slate-600">Coba ganti URL: <code>/hello/namamu</code></p>
@endsection
