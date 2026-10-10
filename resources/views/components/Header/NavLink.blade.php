<li class="flex items-center">
    <a
        href="{{ $href }}"
        @if($active) aria-current="page" @endif
        @class([
            'flex min-h-12 w-full items-center rounded-xl px-4 text-sm font-semibold transition-colors focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-800 sm:w-auto',
            'bg-yellow-300 text-sky-950 hover:bg-yellow-200' => $href === '/results',
            'bg-sky-950 text-white hover:bg-sky-900' => $active && $href !== '/results',
            'text-slate-700 hover:bg-sky-50 hover:text-sky-950' => !$active && $href !== '/results',
        ])
    >
        {{ $slot }}
    </a>
</li>
