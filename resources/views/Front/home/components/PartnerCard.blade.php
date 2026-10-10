<article data-partner-group="{{ $partner['group'] }}">
    @if ($partner['url'])
        <a href="{{ $partner['url'] }}" target="_blank" rel="noopener noreferrer" class="partner-card-link">
    @else
        <div class="partner-card-link">
    @endif
        <span class="flex h-12 w-16 shrink-0 items-center justify-start">
            <img src="{{ asset('images/' . $partner['logo']) }}" alt="" loading="lazy" class="max-h-full max-w-full object-contain">
        </span>
        <span class="mt-3 block font-semibold leading-snug text-slate-900">
            <span data-container="translator">
                @foreach (['es', 'pt', 'en', 'fr'] as $language)
                    <span @class(['hidden' => $language !== 'es']) data-lang="{{ $language }}">{{ $partner['name'][$language] }}</span>
                @endforeach
            </span>
        </span>
        <span class="mt-1 block text-sm text-slate-600">
            <span data-container="translator">
                @foreach (['es', 'pt', 'en', 'fr'] as $language)
                    <span @class(['hidden' => $language !== 'es']) data-lang="{{ $language }}">{{ $partner['category'][$language] }}</span>
                @endforeach
            </span>
        </span>
        <span class="mt-1 block text-xs text-slate-500">
            <span data-container="translator">
                @foreach (['es', 'pt', 'en', 'fr'] as $language)
                    <span @class(['hidden' => $language !== 'es']) data-lang="{{ $language }}">{{ $partner['territory'][$language] }}</span>
                @endforeach
            </span>
        </span>
    @if ($partner['url'])
        </a>
    @else
        </div>
    @endif
</article>
