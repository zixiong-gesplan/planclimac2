@extends('layouts.app')

@section('title', 'PLANCLIMAC2 | Estadísticas del proyecto')

@section('content')
<section class="section-container statistics-page py-8 sm:py-12" aria-labelledby="statistics-title">
    <header class="statistics-header">
        <p class="section-eyebrow">
            <span data-container="translator">
                <span data-lang="es">Interreg MAC 2021–2027</span>
                <span class="hidden" data-lang="pt">Interreg MAC 2021–2027</span>
                <span class="hidden" data-lang="en">Interreg MAC 2021–2027</span>
                <span class="hidden" data-lang="fr">Interreg MAC 2021–2027</span>
            </span>
        </p>
        <h1 id="statistics-title" class="section-title mt-2">
            <span data-container="translator">
                <span data-lang="es">Indicadores y metas</span>
                <span class="hidden" data-lang="pt">Indicadores e metas</span>
                <span class="hidden" data-lang="en">Indicators and targets</span>
                <span class="hidden" data-lang="fr">Indicateurs et objectifs</span>
            </span>
        </h1>
        <p class="statistics-intro">
            <span data-container="translator">
                <span data-lang="es">Consulta las metas definidas para cada indicador del proyecto.</span>
                <span class="hidden" data-lang="pt">Consulte as metas definidas para cada indicador do projeto.</span>
                <span class="hidden" data-lang="en">View the targets set for each project indicator.</span>
                <span class="hidden" data-lang="fr">Consultez les objectifs définis pour chaque indicateur du projet.</span>
            </span>
        </p>
    </header>

    <div class="statistics-controls">
        <h2 id="statistics-filter-label" class="statistics-section-label">
            <span data-container="translator">
                <span data-lang="es">Filtrar indicadores</span>
                <span class="hidden" data-lang="pt">Filtrar indicadores</span>
                <span class="hidden" data-lang="en">Filter indicators</span>
                <span class="hidden" data-lang="fr">Filtrer les indicateurs</span>
            </span>
        </h2>
        <div class="statistics-filters" role="group" aria-labelledby="statistics-filter-label">
            <button type="button" class="statistics-filter" data-filter="all" aria-pressed="true">
                <span data-container="translator">
                    <span data-lang="es">Todos</span><span class="hidden" data-lang="pt">Todos</span><span class="hidden" data-lang="en">All</span><span class="hidden" data-lang="fr">Tous</span>
                </span>
            </button>
            @foreach ($indicators as $category)
                <button type="button" class="statistics-filter" data-filter="{{ $category['id'] }}" aria-pressed="false">
                    <span data-container="translator">
                        @foreach (['es', 'pt', 'en', 'fr'] as $language)
                            <span @class(['hidden' => $language !== 'es']) data-lang="{{ $language }}">{{ $category['title'][$language] ?? '' }}</span>
                        @endforeach
                    </span>
                </button>
            @endforeach
        </div>
    </div>

    <span id="statistics-cards-label" class="sr-only" data-container="translator">
        <span data-lang="es">Indicadores del proyecto</span><span class="hidden" data-lang="pt">Indicadores do projeto</span><span class="hidden" data-lang="en">Project indicators</span><span class="hidden" data-lang="fr">Indicateurs du projet</span>
    </span>
    <p id="statistics-filter-status" class="sr-only" aria-live="polite"></p>
    <div id="statistics-cards" class="statistics-grid" role="group" aria-labelledby="statistics-cards-label">
        @foreach ($indicators as $category)
            @foreach ($category['goals'] as $indicator)
                @php
                    $target = $indicator['target'];
                    $value = $indicator['value'];
                    $percentage = $value !== null && $target > 0 ? min(100, max(0, ($value / $target) * 100)) : 0;
                @endphp
                <button
                    type="button"
                    class="statistics-card"
                    data-indicator-card
                    data-id="{{ $indicator['id'] }}"
                    data-category="{{ $category['id'] }}"
                    data-code="{{ $indicator['code'] ?? '' }}"
                    data-value="{{ $value }}"
                    data-target="{{ $target }}"
                    data-title-es="{{ $indicator['title']['es'] ?? '' }}"
                    data-title-pt="{{ $indicator['title']['pt'] ?? '' }}"
                    data-title-en="{{ $indicator['title']['en'] ?? '' }}"
                    data-title-fr="{{ $indicator['title']['fr'] ?? '' }}"
                    data-category-es="{{ $category['title']['es'] ?? '' }}"
                    data-category-pt="{{ $category['title']['pt'] ?? '' }}"
                    data-category-en="{{ $category['title']['en'] ?? '' }}"
                    data-category-fr="{{ $category['title']['fr'] ?? '' }}"
                    aria-pressed="false"
                    aria-controls="statistics-detail"
                >
                    <span class="statistics-card-top">
                        <span class="statistics-card-category" data-card-category>
                            <span data-container="translator">
                                @foreach (['es', 'pt', 'en', 'fr'] as $language)
                                    <span @class(['hidden' => $language !== 'es']) data-lang="{{ $language }}">{{ $category['title'][$language] ?? '' }}</span>
                                @endforeach
                            </span>
                        </span>
                        @if (!empty($indicator['code']))
                            <span class="statistics-card-code">{{ $indicator['code'] }}</span>
                        @endif
                    </span>
                    <span class="statistics-card-title">
                        <span data-container="translator">
                            @foreach (['es', 'pt', 'en', 'fr'] as $language)
                                <span @class(['hidden' => $language !== 'es']) data-lang="{{ $language }}">{{ $indicator['short_title'][$language] ?? $indicator['title'][$language] ?? '' }}</span>
                            @endforeach
                        </span>
                    </span>
                    <span class="statistics-card-values">
                        <span class="statistics-card-current" data-value-display>{{ $value === null ? '0' : number_format($value, 0, ',', '.') }}</span>
                        <span class="statistics-card-divider" aria-hidden="true">/</span>
                        <span class="statistics-card-target" data-target-display>{{ number_format($target, 0, ',', '.') }}</span>
                        <span class="statistics-card-target-label">
                            <span data-container="translator">
                                <span data-lang="es">meta</span><span class="hidden" data-lang="pt">meta</span><span class="hidden" data-lang="en">target</span><span class="hidden" data-lang="fr">objectif</span>
                            </span>
                        </span>
                    </span>
                    @if ($value !== null && $target > 0)
                        <span
                            class="statistics-progress"
                            aria-hidden="true"
                        >
                            <span class="statistics-progress-fill" style="width: {{ $percentage }}%"></span>
                        </span>
                    @elseif ($target > 0)
                        <span class="statistics-no-target">
                            <span data-container="translator">
                                <span data-lang="es">En ejecución</span><span class="hidden" data-lang="pt">Em execução</span><span class="hidden" data-lang="en">In progress</span><span class="hidden" data-lang="fr">En cours</span>
                            </span>
                        </span>
                    @else
                        <span class="statistics-no-target">
                            <span data-container="translator">
                                <span data-lang="es">Meta no definida</span><span class="hidden" data-lang="pt">Meta não definida</span><span class="hidden" data-lang="en">Target not defined</span><span class="hidden" data-lang="fr">Objectif non défini</span>
                            </span>
                        </span>
                    @endif
                </button>
            @endforeach
        @endforeach
    </div>

    <section id="statistics-detail" class="statistics-detail" aria-labelledby="statistics-detail-title" aria-live="polite">
        <div class="statistics-detail-heading">
            <p class="section-eyebrow" id="statistics-detail-kicker">
                <span data-container="translator">
                    <span data-lang="es">Detalle del indicador</span><span class="hidden" data-lang="pt">Detalhe do indicador</span><span class="hidden" data-lang="en">Indicator details</span><span class="hidden" data-lang="fr">Détail de l’indicateur</span>
                </span>
                <span aria-hidden="true"> · </span><span data-selected-code></span>
            </p>
            <p class="statistics-detail-category" data-selected-category></p>
            <h2 id="statistics-detail-title" class="statistics-detail-title"></h2>
        </div>

        <dl class="statistics-detail-metrics">
            <div class="statistics-detail-metric">
                <dt>
                    <span data-container="translator">
                        <span data-lang="es">Valor actual</span><span class="hidden" data-lang="pt">Valor atual</span><span class="hidden" data-lang="en">Current value</span><span class="hidden" data-lang="fr">Valeur actuelle</span>
                    </span>
                </dt>
                <dd data-selected-value>0</dd>
            </div>
            <div class="statistics-detail-metric">
                <dt>
                    <span data-container="translator">
                        <span data-lang="es">Meta</span><span class="hidden" data-lang="pt">Meta</span><span class="hidden" data-lang="en">Target</span><span class="hidden" data-lang="fr">Objectif</span>
                    </span>
                </dt>
                <dd data-selected-target>—</dd>
            </div>
        </dl>
    </section>
</section>

<script>
    (() => {
        const cards = Array.from(document.querySelectorAll('[data-indicator-card]'));
        const filters = Array.from(document.querySelectorAll('[data-filter]'));
        const detail = document.querySelector('#statistics-detail');
        if (!cards.length || !filters.length || !detail) return;

        const selectedCode = detail.querySelector('[data-selected-code]');
        const selectedCategory = detail.querySelector('[data-selected-category]');
        const selectedValue = detail.querySelector('[data-selected-value]');
        const selectedTarget = detail.querySelector('[data-selected-target]');
        const filterStatus = document.querySelector('#statistics-filter-status');

        const currentLanguage = () => {
            const stored = localStorage.getItem('lang') || 'es';
            return ['es', 'pt', 'en', 'fr'].includes(stored) ? stored : 'es';
        };

        const formatNumber = (value) => {
            if (value === null || value === undefined || value === '') return '0';
            return new Intl.NumberFormat(currentLanguage()).format(Number(value) || 0);
        };

        const announceCount = (count) => {
            const messages = {
                es: `${count} indicadores`,
                pt: `${count} indicadores`,
                en: `${count} indicators`,
                fr: `${count} indicateurs`,
            };
            filterStatus.textContent = messages[currentLanguage()];
        };

        const refreshCardNumbers = () => {
            cards.forEach((card) => {
                card.querySelector('[data-value-display]').textContent = formatNumber(card.dataset.value);
                card.querySelector('[data-target-display]').textContent = formatNumber(card.dataset.target);
            });
        };

        const selectCard = (card) => {
            if (!card) return;
            cards.forEach((item) => {
                const selected = item === card;
                item.setAttribute('aria-pressed', String(selected));
            });

            const lang = currentLanguage();
            const langSuffix = lang.charAt(0).toUpperCase() + lang.slice(1);
            const code = card.dataset.code;
            selectedCode.textContent = code || card.dataset.id.toUpperCase();
            selectedCategory.textContent = card.dataset[`category${langSuffix}`] || '';
            detail.querySelector('#statistics-detail-title').textContent = card.dataset[`title${langSuffix}`] || '';
            selectedValue.textContent = formatNumber(card.dataset.value);
            selectedTarget.textContent = formatNumber(card.dataset.target);
        };

        filters.forEach((filter) => {
            filter.addEventListener('click', () => {
                const category = filter.dataset.filter;
                filters.forEach((item) => item.setAttribute('aria-pressed', String(item === filter)));

                const visibleCards = cards.filter((card) => {
                    const visible = category === 'all' || card.dataset.category === category;
                    card.hidden = !visible;
                    return visible;
                });

                const selectedVisible = visibleCards.find((card) => card.getAttribute('aria-pressed') === 'true');
                selectCard(selectedVisible || visibleCards[0]);
                announceCount(visibleCards.length);
            });
        });

        cards.forEach((card) => card.addEventListener('click', () => selectCard(card)));

        // The shared language switcher updates static translations; refresh the selected dynamic fields too.
        document.addEventListener('click', (event) => {
            if (event.target.closest('#languageMenu button[onclick^="setLanguage"]')) {
                window.setTimeout(() => {
                    refreshCardNumbers();
                    announceCount(cards.filter((card) => !card.hidden).length);
                    const selected = cards.find((card) => card.getAttribute('aria-pressed') === 'true');
                    selectCard(selected);
                }, 0);
            }
        });

        const initialCard = cards[0];
        refreshCardNumbers();
        selectCard(initialCard);
        announceCount(cards.length);
    })();
</script>
@endsection
