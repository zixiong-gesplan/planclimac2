@extends('layouts.app')

@section('title','PLANCLIMAC2 (1/MAC/2/2.4/0006) | Estadísticas')

@section('content')
<section class="mt-8 mb-4 mx-auto w-full md:w-2/3">
    <div data-container="translator">
        <h1 
            class="w-full text-center text-3xl font-semibold text-sky-800 mt-4" 
            data-lang="es">
            Estadísticas
        </h1>
        <h1 
            class="hidden w-full text-center text-3xl font-semibold text-sky-800 mt-4" 
            data-lang="pt">
            Estatísticas
        </h1>
        <h1 
            class="hidden w-full text-center text-3xl font-semibold text-sky-800 mt-4" 
            data-lang="en">
            Statistics
        </h1>
        <h1 
            class="hidden w-full text-center text-3xl font-semibold text-sky-800 mt-4" 
            data-lang="fr">
            Statistiques
        </h1>
    </div>


    @foreach( $indicators as $i )
    <div data-container="translator">
        <h2 class="w-full text-xl text-green-700 text-center mb-3" data-lang="es">
            {{ $i['title']['es'] ?? '' }}
        </h2>
        <h2 class="hidden w-full text-xl text-green-700 text-center mb-3" data-lang="pt">
            {{ $i['title']['pt'] ?? '' }}
        </h2>
        <h2 class="hidden w-full text-xl text-green-700 text-center mb-3" data-lang="en">
            {{ $i['title']['en'] ?? '' }}
        </h2>
        <h2 class="hidden w-full text-xl text-green-700 text-center mb-3" data-lang="fr">
            {{ $i['title']['fr'] ?? '' }}
        </h2>
    </div>

        @foreach( $i['goals'] as $goal )
            <x-progress
                :title="$goal['title']"
                progress="{{ $goal['progress'] }}"
                target="{{ $goal['target'] }}"
            />
        @endforeach
    @endforeach
</section>
@endsection