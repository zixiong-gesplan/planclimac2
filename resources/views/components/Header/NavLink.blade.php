<li @class([
        'h-full flex items-center md:p-4',
        'text-lime-500' => $slot =='PLANCLIMAC2',
        'bg-lime-500 text-white' => $active
    ])
>
    <a href="{{ $href }}" class="h-full w-full flex items-center text-xs lg:text-base p-2">
        {{ $slot }}
    </a>
</li>