<li @class([
        'h-full flex items-center',
        'text-sky-800' => $slot =='PLANCLIMAC2',
        'bg-sky-800 text-white' => $active
    ])
>
    <a href="{{ $href }}" class="h-full w-full flex items-center text-xs lg:text-sm p-6 lg:px-4 lg:py-6">
        {{ $slot }}
    </a>
</li>