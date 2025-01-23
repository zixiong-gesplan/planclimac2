<a href="{{ $query }}" 
    @class([
        'rounded px-4 py-2 text-sm md:text-md lg:text-lg items-center flex',
        'text-lime-500 bg-whiite border-lime-500 border' => Request::is($query),
        'text-white bg-lime-500' => !Request::is($query)
    ])
    >
    {{ $label }}
</a>