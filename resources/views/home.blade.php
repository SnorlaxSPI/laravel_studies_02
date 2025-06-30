@extends('layouts/main_layout')
@section('content')
    {{-- for --}}
    @for ($index = 0; $index < 5; $index++)
        <h1>Index: {{ $index }}</h1>
    @endfor

    {{-- foreach --}}
    @foreach ($cities as $city)
        <h1>City: {{ $city }}</h1>
    @endforeach

    {{-- forelse --}}
    @forelse ($name as $nameItem)
        <h1>Name: {{ $nameItem }}</h1>
    @empty
        <h1>No names available</h1>
    @endforelse

    {{-- while --}}
    @php
        $indice = 0;
    @endphp

    @while ($indice < 5)
        <h1>Índice: {{ $indice++ }}</h1>
    @endwhile
@endsection
