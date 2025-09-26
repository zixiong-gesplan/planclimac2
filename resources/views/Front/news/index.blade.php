@extends('layouts.app')
 
@section('title', 'Noticias de PLANCLIMAC2')

@section('content')

<section class="my-4 w-full mx-auto">
    <h1 class="w-full text-center text-3xl font-semibold text-sky-800 mt-4">
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
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded focus:ring-sky-800 focus:border-sky-800 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            <button type="submit" class="text-sky-800 text-sm md:text-lg rounded px-4 border border-sky-800"> Buscar</button>
        </form> -->
    </div>
</section>

<section class="my-4 w-full lg:w-3/4 lg:mx-auto">
    @foreach($news as $n)
        <x-NewsCard
            src="{{ $n['image'] }}"
            title="{{ $n['title'] }}"
            created_at="{{ $n['created_at'] }}"
            description="{!! $n['short_description'] !!}"
            id="{{ $n['id'] }}"
            :tags="$n['tags']"
        />
    @endforeach
</section>
<section class="my-4 w-full lg:w-3/4 lg:mx-auto flex gap-4 flex-wrap">
    <a
        href="/news?page=1"
        @class([
            'min-w-9 rounded-md border border-slate-300 py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2',
            'bg-sky-900 border-transparent text-white shadow-md hover:shadow-lg disabled:pointer-events-none disabled:shadow-none' => 1 == request()->query('page') || request()->query('page') == null
        ])
    >1</a>
    @for ($i = 2; $i <=$count+1;$i++)
        <a
            href="/news?page={{$i}}"
            @class([
                'min-w-9 rounded-md border border-slate-300 py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2',
                'bg-sky-900 border-transparent text-white shadow-md hover:shadow-lg disabled:pointer-events-none disabled:shadow-none' => $i == request()->query('page')
            ])
        >{{$i}}</a>
    @endfor
</section>
@endsection