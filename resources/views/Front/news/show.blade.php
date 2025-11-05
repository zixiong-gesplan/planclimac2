@extends('layouts.app')

@section('title', "Noticia")

@section('content')

<section class="my-4 w-full mx-auto post-content">

    <div data-container="translator">
        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white text-center" data-lang="es">
            {{ $post['title_es'] }}
        </h1>
        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white text-center hidden" data-lang="pt">
            {{ $post['title_pt'] }}
        </h1>
        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white text-center hidden" data-lang="en">
            {{ $post['title_en'] }}
        </h1>
        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white text-center hidden" data-lang="fr">
            {{ $post['title_fr'] }}
        </h1>
    </div>
    <img src="{{$post['image']}}" alt="" class="w-1/2 my-4 border border-gray-500 rounded-lg aspect-video">
    <div class="w-2/3 mx-auto ">
        <div data-container="translator">
            <div class="mt-8 text-md mb-4" data-lang="es">
                {!! $post['description_es'] !!}
            </div>
            <div class="mt-8 text-md mb-4 hidden" data-lang="pt">
                {!! $post['description_pt'] !!}
            </div>
            <div class="mt-8 text-md mb-4 hidden" data-lang="en">
                {!! $post['description_en'] !!}
            </div>
            <div class="mt-8 text-md mb-4 hidden" data-lang="fr">
                {!! $post['description_fr'] !!}
            </div>
        </div>
        @if( $post['document'] != null)
            <a target="_blank" id="document-link" href="{{$post['document']}}" class="text-lg text-white px-4 py-2 bg-sky-800 rounded my-4">Ver documento</a>
        @endif

        <div class="mt-4">
            <p class="font-bold text-gray-800">
                Publicada el {{ date_format($post['created_at'], "d/m/Y")}}
            </p>
            {{-- @if( count($post['tags']) == 0)
                <p></p>
            @else
                <p>
                    Temas:
                    @foreach( $post['tags'] as $tag )
                        <a href="" class="capitalize after:content-[','] p-">{{$tag}}</a>
                    @endforeach
                </p>
            @endif --}}
        </div>
    </div>

</section>
@endsection