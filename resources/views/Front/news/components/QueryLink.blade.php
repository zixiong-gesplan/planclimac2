<a href="{{ $query }}" 
    @class([
        'rounded px-4 py-2 text-sm md:text-md lg:text-lg items-center flex',
        'text-sky-800 bg-whiite border-sky-800 border' => Request::is($query),
        'text-white bg-sky-800' => !Request::is($query)
    ])
    >
    {{ $label }}
</a>