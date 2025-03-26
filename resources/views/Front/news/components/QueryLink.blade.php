<a href="{{ $query }}" 
    @class([
        'rounded px-4 py-2 text-sm md:text-md lg:text-lg items-center flex',
        'text-emerald-500 bg-whiite border-emerald-500 border' => Request::is($query),
        'text-white bg-emerald-500' => !Request::is($query)
    ])
    >
    {{ $label }}
</a>