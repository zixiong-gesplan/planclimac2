@php
    $spanishTitle = (string) ($title['es'] ?? '');
    $spanishSummary = (string) ($description['es'] ?? '');
    $localizedNews = [];

    foreach (['es', 'pt', 'en', 'fr'] as $language) {
        $localizedTitle = trim((string) ($title[$language] ?? ''));
        $localizedSummary = trim((string) ($description[$language] ?? ''));
        $hasCompleteTranslation = $localizedTitle !== '' && $localizedSummary !== '';

        $localizedNews[$language] = [
            'title' => $hasCompleteTranslation || $language === 'es' ? $localizedTitle : $spanishTitle,
            'summary' => \Illuminate\Support\Str::limit(
                html_entity_decode(
                    strip_tags($hasCompleteTranslation || $language === 'es' ? $localizedSummary : $spanishSummary),
                    ENT_QUOTES | ENT_HTML5,
                    'UTF-8'
                ),
                200
            ),
        ];
    }
@endphp

<article class="news-card">
    @if (filled($src))
        <div class="news-card-media">
            <img src="{{ $src }}" alt="" class="news-card-image" loading="lazy" decoding="async">
        </div>
    @else
        <div class="news-card-media news-card-placeholder" aria-hidden="true">
            <span>PLANCLIMAC2</span>
        </div>
    @endif

    <div class="news-card-content">
        <h2 id="news-title-{{ $id }}" class="news-card-title" data-container="translator">
            <a href="/news/{{ $id }}" data-lang="es">{{ $localizedNews['es']['title'] }}</a>
            <a href="/news/{{ $id }}" class="hidden" data-lang="pt">{{ $localizedNews['pt']['title'] }}</a>
            <a href="/news/{{ $id }}" class="hidden" data-lang="en">{{ $localizedNews['en']['title'] }}</a>
            <a href="/news/{{ $id }}" class="hidden" data-lang="fr">{{ $localizedNews['fr']['title'] }}</a>
        </h2>

        <div class="news-card-summary" data-container="translator">
            <p data-lang="es">{{ $localizedNews['es']['summary'] }}</p>
            <p class="hidden" data-lang="pt">{{ $localizedNews['pt']['summary'] }}</p>
            <p class="hidden" data-lang="en">{{ $localizedNews['en']['summary'] }}</p>
            <p class="hidden" data-lang="fr">{{ $localizedNews['fr']['summary'] }}</p>
        </div>

        <a href="/news/{{ $id }}" id="news-action-{{ $id }}" class="news-card-action" aria-labelledby="news-action-{{ $id }} news-title-{{ $id }}" data-container="translator">
            <span data-lang="es">Leer noticia <span aria-hidden="true">→</span></span>
            <span class="hidden" data-lang="pt">Ler notícia <span aria-hidden="true">→</span></span>
            <span class="hidden" data-lang="en">Read the story <span aria-hidden="true">→</span></span>
            <span class="hidden" data-lang="fr">Lire l’actualité <span aria-hidden="true">→</span></span>
        </a>
    </div>
</article>
