@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <h1 class="text-3xl font-bold mb-4">Kontak</h1>
    <dl class="space-y-2">
        @foreach ($contacts as $label => $value)
            <div class="flex gap-3">
                <dt class="w-28 font-semibold">{{ $label }}</dt>
                <dd>{{ $value }}</dd>
            </div>
        @endforeach
    </dl>
@endsection
