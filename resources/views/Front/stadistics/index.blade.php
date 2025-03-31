@extends('layouts.app')

@section('title','Estadísticas')

@section('content')
<section class="mt-8 mb-4 mx-auto w-full md:w-2/3">
    <h1 class="w-full text-center text-3xl font-semibold text-sky-800 mt-4">
        Estadísticas
    </h1>

    @foreach( $indicators as $i )
        <h2 class="w-full text-xl text-green-700 text-center mb-3">
            {{ $i['title'] }}
        </h2>
        @foreach( $i['goals'] as $goal )
            <x-progress
                title="{{ $goal['title'] }}"
                progress="{{ $goal['progress'] }}"
                target="{{ $goal['target'] }}"
            />
        @endforeach
    @endforeach
</section>
@endsection