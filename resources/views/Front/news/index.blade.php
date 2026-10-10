@extends('layouts.app')
 
@section('title', 'PLANCLIMAC2 (1/MAC/2/2.4/0006) | Noticias')

@section('content')

<header class="section-container news-header" aria-labelledby="news-page-title">
    <p class="section-eyebrow" data-container="translator">
        <span data-lang="es">Actualidad del proyecto</span>
        <span class="hidden" data-lang="pt">Atualidade do projeto</span>
        <span class="hidden" data-lang="en">Project updates</span>
        <span class="hidden" data-lang="fr">Actualités du projet</span>
    </p>
    <h1 id="news-page-title" class="section-title mt-2" data-container="translator">
        <span data-lang="es">Noticias</span>
        <span class="hidden" data-lang="pt">Notícias</span>
        <span class="hidden" data-lang="en">News</span>
        <span class="hidden" data-lang="fr">Actualités</span>
    </h1>
    <p class="news-intro" data-container="translator">
        <span data-lang="es">Publicaciones, actividades y novedades de PLANCLIMAC2.</span>
        <span class="hidden" data-lang="pt">Publicações, atividades e novidades do PLANCLIMAC2.</span>
        <span class="hidden" data-lang="en">Publications, activities and updates from PLANCLIMAC2.</span>
        <span class="hidden" data-lang="fr">Publications, activités et actualités de PLANCLIMAC2.</span>
    </p>
</header>

@if ($featured)
    @php
        $featuredDate = $featured['created_at']
            ? \Illuminate\Support\Carbon::parse($featured['created_at'])
            : null;
    @endphp
    <div class="section-container">
    <article class="news-featured" aria-labelledby="featured-news-title">
        @if (!empty($featured['image']))
            <div class="news-featured-media">
                <img src="{{ $featured['image'] }}" alt="" class="news-featured-image" fetchpriority="high">
            </div>
        @else
            <div class="news-featured-media news-featured-placeholder" aria-hidden="true">
                <span>PLANCLIMAC2</span>
            </div>
        @endif

        <div class="news-featured-content">
            <h2 id="featured-news-title" class="news-featured-title" data-container="translator">
                <span data-lang="es">{{ $featured['title_es'] }}</span>
                <span class="hidden" data-lang="pt">{{ $featured['title_pt'] }}</span>
                <span class="hidden" data-lang="en">{{ $featured['title_en'] }}</span>
                <span class="hidden" data-lang="fr">{{ $featured['title_fr'] }}</span>
            </h2>

            <div class="news-featured-summary" data-container="translator">
                <p data-lang="es">{{ \Illuminate\Support\Str::limit(strip_tags((string) $featured['short_description_es']), 260) }}</p>
                <p class="hidden" data-lang="pt">{{ \Illuminate\Support\Str::limit(strip_tags((string) $featured['short_description_pt']), 260) }}</p>
                <p class="hidden" data-lang="en">{{ \Illuminate\Support\Str::limit(strip_tags((string) $featured['short_description_en']), 260) }}</p>
                <p class="hidden" data-lang="fr">{{ \Illuminate\Support\Str::limit(strip_tags((string) $featured['short_description_fr']), 260) }}</p>
            </div>

            <a href="/news/{{ $featured['id'] }}" class="news-featured-link" data-container="translator">
                <span data-lang="es">Leer noticia <span aria-hidden="true">→</span></span>
                <span class="hidden" data-lang="pt">Ler notícia <span aria-hidden="true">→</span></span>
                <span class="hidden" data-lang="en">Read the story <span aria-hidden="true">→</span></span>
                <span class="hidden" data-lang="fr">Lire l’actualité <span aria-hidden="true">→</span></span>
            </a>
        </div>
    </article>
    </div>
@endif

<section class="section-container news-list" aria-labelledby="news-page-title">
    @foreach($news as $n)
        <x-NewsCard
            src="{{ $n['image'] }}"
            :title="[
                'es' => $n['title_es'],
                'pt' => $n['title_pt'],
                'en' => $n['title_en'],
                'fr' => $n['title_fr'],
            ]"
            created_at="{{ $n['created_at'] }}"
            :description="[
                'es' => $n['short_description_es'],
                'pt' => $n['short_description_pt'],
                'en' => $n['short_description_en'],
                'fr' => $n['short_description_fr'],
            ]"
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
