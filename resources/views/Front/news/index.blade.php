@extends('layouts.app')
 
@section('title', 'Noticias de PLANCLIMAC2')

@section('content')

<section class="my-4 w-full mx-auto">
    <h1 class="w-full text-center text-3xl font-semibold text-lime-500 mt-4">
        Noticias
    </h1>
    <div class="flex gap-4 w-full justify-center mt-4 flex-col lg:flex-row">
        <!-- <div class="flex flex-col md:flex-row gap-2 justify-between">
            <x-QueryLink
                query="news"
                label="Todas"
            />
            <x-QueryLink
                query="news?type=acciones formativas"
                label="Acciones formativas"
            />
            
            <x-QueryLink
                query="news?type=publicaciones científicas"
                label="Publicaciones científicas"
            />
            <x-QueryLink
                query="news?type=publicaciones técnicas"
                label="Publicaciones técnicas"
            />
        </div>

        <form action="" class="flex gap-2">
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded focus:ring-lime-500 focus:border-lime-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            <button type="submit" class="text-lime-500 text-sm md:text-lg rounded px-4 border border-lime-500"> Buscar</button>
        </form> -->
    </div>
</section>

<section class="my-4 w-full lg:w-3/4 lg:mx-auto">

    @foreach($news as $n)
        <x-NewsCard
            src="{{ $n['image'] }}"
            title="{{ $n['title'] }}"
            date="{{ $n['date'] }}"
            description="{{$n['short_description']}}"
            id="{{ $n['id'] }}"
            :tags="$n['tags']"
        />
    @endforeach
</section>

@endsection