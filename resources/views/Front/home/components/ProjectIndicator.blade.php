<div @class([
    'project-indicator',
    'project-indicator--featured' => $featured,
    'project-indicator--spotlight' => $spotlight,
])>
    <span class="project-indicator-icon" aria-hidden="true">
        @switch($indicator['icon'])
            @case('book-open')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 7v14M3 18V5a2 2 0 0 1 2-2h2a5 5 0 0 1 5 5 5 5 0 0 1 5-5h2a2 2 0 0 1 2 2v13h-4a5 5 0 0 0-5 3 5 5 0 0 0-5-3H3Z"/></svg>
                @break
            @case('users')
            @case('users-round')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2M10 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM20 8v6m3-3h-6"/></svg>
                @break
            @case('calendar-check')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 11h18m-13 5 2 2 4-4"/></svg>
                @break
            @case('file-text')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M8 13h8m-8 4h8"/></svg>
                @break
            @case('globe')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20 15 15 0 0 1 0-20Z"/></svg>
                @break
            @case('megaphone')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="m3 11 18-5v12L3 13v-2Zm0 2 2 7h5l-3-6m14-5a3 3 0 0 1 0 6"/></svg>
                @break
            @case('chart')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18M8 15l4-4 3 3 6-7"/><path d="M17 7h4v4"/></svg>
                @break
        @endswitch
    </span>

    <div class="min-w-0">
        <dt class="project-indicator-title" data-container="translator">
            @foreach (['es', 'pt', 'en', 'fr'] as $language)
                <span @class(['hidden' => $language !== 'es']) data-lang="{{ $language }}">{{ $indicator['title'][$language] }}</span>
            @endforeach
        </dt>
        <dd class="project-indicator-value">
            <span class="sr-only">{{ number_format($indicator['progress'], 0, ',', '.') }}</span>
            <span aria-hidden="true" data-count-up data-count-value="{{ $indicator['progress'] }}">{{ number_format($indicator['progress'], 0, ',', '.') }}</span>
        </dd>
    </div>
</div>
