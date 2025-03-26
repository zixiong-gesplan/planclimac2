<li @class([
        'h-full flex items-center',
        'text-emerald-500' => $slot =='PLANCLIMAC2',
        'bg-emerald-500 text-white' => $active
    ])
>
    <a href="{{ $href }}" class="h-full w-full flex items-center text-xs lg:text-base p-8">
        {{ $slot }}
    </a>
</li>