@extends('layouts.app')
 
@section('title', 'PLANCLIMAC2 (1/MAC/2/2.4/0006) | Noticias')
@section('canonical', request()->url() . ($currentPage > 1 ? '?page=' . $currentPage : ''))

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

<section id="news-grid" class="section-container news-grid" aria-labelledby="news-page-title">
    @include('Front.news.partials.cards', ['news' => $news])

    @if ($news->isEmpty() && !$featured)
        <p class="news-empty-state" data-container="translator">
            <span data-lang="es">No hay más noticias para mostrar.</span>
            <span class="hidden" data-lang="pt">Não há mais notícias para mostrar.</span>
            <span class="hidden" data-lang="en">There are no more news articles to show.</span>
            <span class="hidden" data-lang="fr">Il n’y a pas d’autres actualités à afficher.</span>
        </p>
    @endif
</section>

@if ($hasMore)
    <div class="section-container news-load-more-wrap" data-news-load-more data-base-url="/news" data-total-pages="{{ $totalPages }}">
        <button
            id="news-load-more-button"
            type="button"
            class="news-load-more"
            data-next-page="{{ $currentPage + 1 }}"
            aria-controls="news-grid"
            aria-describedby="news-load-status news-load-error"
            aria-disabled="false"
            hidden
        >
            <span data-container="translator">
                <span data-lang="es">Cargar más noticias</span>
                <span class="hidden" data-lang="pt">Carregar mais notícias</span>
                <span class="hidden" data-lang="en">Load more news</span>
                <span class="hidden" data-lang="fr">Charger plus d’actualités</span>
            </span>
        </button>
        <p id="news-load-status" class="sr-only" role="status" aria-live="polite" aria-atomic="true"></p>
        <p id="news-load-error" class="news-load-error" role="alert" hidden>
            <span data-container="translator">
                <span data-lang="es">No se han podido cargar más noticias. Puedes intentarlo de nuevo.</span>
                <span class="hidden" data-lang="pt">Não foi possível carregar mais notícias. Pode tentar novamente.</span>
                <span class="hidden" data-lang="en">More news could not be loaded. You can try again.</span>
                <span class="hidden" data-lang="fr">Impossible de charger d’autres actualités. Vous pouvez réessayer.</span>
            </span>
        </p>
    </div>
@endif

@if ($totalPages > 1)
    <nav class="section-container news-pagination" aria-labelledby="news-pagination-label">
        <span id="news-pagination-label" class="sr-only" data-container="translator">
            <span data-lang="es">Paginación de noticias</span>
            <span class="hidden" data-lang="pt">Paginação de notícias</span>
            <span class="hidden" data-lang="en">News pagination</span>
            <span class="hidden" data-lang="fr">Pagination des actualités</span>
        </span>
        <div class="news-pagination-links">
            @if ($currentPage > 1)
                <a class="news-page-link news-page-link--direction" href="/news?page={{ $currentPage - 1 }}" rel="prev">
                    <span aria-hidden="true">←</span>
                    <span data-container="translator">
                        <span data-lang="es">Anterior</span><span class="hidden" data-lang="pt">Anterior</span><span class="hidden" data-lang="en">Previous</span><span class="hidden" data-lang="fr">Précédent</span>
                    </span>
                </a>
            @endif

            @if ($pageWindowStart > 1)
                <a class="news-page-link" href="/news?page=1">1</a>
                @if ($pageWindowStart > 2)
                    <span class="news-page-ellipsis" aria-hidden="true">…</span>
                @endif
            @endif

            @for ($pageNumber = $pageWindowStart; $pageNumber <= $pageWindowEnd; $pageNumber++)
                @if ($pageNumber === $currentPage)
                    <span class="news-page-link news-page-link--current" aria-current="page">{{ $pageNumber }}</span>
                @else
                    <a class="news-page-link" href="/news?page={{ $pageNumber }}">{{ $pageNumber }}</a>
                @endif
            @endfor

            @if ($pageWindowEnd < $totalPages)
                @if ($pageWindowEnd < $totalPages - 1)
                    <span class="news-page-ellipsis" aria-hidden="true">…</span>
                @endif
                <a class="news-page-link" href="/news?page={{ $totalPages }}">{{ $totalPages }}</a>
            @endif

            @if ($currentPage < $totalPages)
                <a class="news-page-link news-page-link--direction" href="/news?page={{ $currentPage + 1 }}" rel="next">
                    <span data-container="translator">
                        <span data-lang="es">Siguiente</span><span class="hidden" data-lang="pt">Seguinte</span><span class="hidden" data-lang="en">Next</span><span class="hidden" data-lang="fr">Suivant</span>
                    </span>
                    <span aria-hidden="true">→</span>
                </a>
            @endif
        </div>
    </nav>
@endif

<script>
    (() => {
        const wrapper = document.querySelector('[data-news-load-more]');
        if (!wrapper) return;

        const button = wrapper.querySelector('#news-load-more-button');
        const grid = document.querySelector('#news-grid');
        const status = wrapper.querySelector('#news-load-status');
        const error = wrapper.querySelector('#news-load-error');
        const totalPages = Number(wrapper.dataset.totalPages);
        let isLoading = false;
        let isComplete = false;

        if (!button || !grid || !Number.isFinite(totalPages)) return;
        button.hidden = false;

        const language = () => {
            const saved = window.localStorage.getItem('lang') || 'es';
            return ['es', 'pt', 'en', 'fr'].includes(saved) ? saved : 'es';
        };

        const messages = {
            es: { loading: 'Cargando noticias…', more: 'Cargar más noticias', end: 'No hay más noticias', error: 'No se han podido cargar más noticias. Puedes intentarlo de nuevo.', loaded: (count) => `Se han cargado ${count} noticias más.` },
            pt: { loading: 'A carregar notícias…', more: 'Carregar mais notícias', end: 'Não há mais notícias', error: 'Não foi possível carregar mais notícias. Pode tentar novamente.', loaded: (count) => `Foram carregadas mais ${count} notícias.` },
            en: { loading: 'Loading news…', more: 'Load more news', end: 'No more news', error: 'More news could not be loaded. You can try again.', loaded: (count) => `${count} more news articles loaded.` },
            fr: { loading: 'Chargement des actualités…', more: 'Charger plus d’actualités', end: 'Il n’y a pas d’autres actualités', error: 'Impossible de charger d’autres actualités. Vous pouvez réessayer.', loaded: (count) => `${count} actualités supplémentaires chargées.` },
        };

        const applyLanguage = (root, lang) => {
            root.querySelectorAll('[data-container="translator"]').forEach((group) => {
                const children = group.querySelectorAll(':scope > *');
                children.forEach((child) => child.classList.add('hidden'));
                const selected = group.querySelector(`:scope > [data-lang="${lang}"]`) || group.querySelector(':scope > [data-lang="es"]');
                if (selected) selected.classList.remove('hidden');
            });
        };

        button.addEventListener('click', async () => {
            if (isLoading || isComplete) return;

            const lang = language();
            const nextPage = Number(button.dataset.nextPage);
            if (!Number.isInteger(nextPage) || nextPage > totalPages) {
                isComplete = true;
                button.setAttribute('aria-disabled', 'true');
                button.textContent = messages[lang].end;
                return;
            }

            isLoading = true;
            error.hidden = true;
            button.setAttribute('aria-disabled', 'true');
            button.setAttribute('aria-busy', 'true');
            grid.setAttribute('aria-busy', 'true');
            button.textContent = messages[lang].loading;
            status.textContent = messages[lang].loading;

            try {
                const url = new URL(wrapper.dataset.baseUrl, window.location.origin);
                url.searchParams.set('page', String(nextPage));
                url.searchParams.set('partial', '1');

                const response = await fetch(url, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'text/html' },
                });
                if (!response.ok) throw new Error('News request failed');

                const html = await response.text();
                const template = document.createElement('template');
                template.innerHTML = html;
                const cards = template.content.querySelectorAll('.news-card');
                if (cards.length === 0) throw new Error('No news cards returned');

                applyLanguage(template.content, lang);
                grid.append(template.content);
                button.dataset.nextPage = String(nextPage + 1);
                status.textContent = messages[lang].loaded(cards.length);

                if (nextPage >= totalPages) {
                    isComplete = true;
                    button.setAttribute('aria-disabled', 'true');
                    button.textContent = messages[lang].end;
                } else {
                    button.removeAttribute('aria-disabled');
                    button.textContent = messages[lang].more;
                }
            } catch (loadError) {
                status.textContent = '';
                applyLanguage(error, lang);
                error.hidden = false;
                button.removeAttribute('aria-disabled');
                button.textContent = messages[lang].more;
            } finally {
                isLoading = false;
                button.removeAttribute('aria-busy');
                grid.removeAttribute('aria-busy');
            }
        });
    })();
</script>
@endsection
