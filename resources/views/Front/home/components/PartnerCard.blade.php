<a href="{{$href}}" target="_blank" rel="noopener noreferrer"
    class="border rounded-lg p-4 isolate bg-white/20 shadow-lg ring-1 ring-black/5"
>
    <figure class="flex flex-col items-center text-center space-y-2 ">
        <img src="{{$src}}" alt="{{$alt}}" class="h-12">
        <div data-container="translator">
        <figcaption class="text-blue-700 text-md font-bold" data-lang="es"> {{$caption['es']}} </figcaption>
        <figcaption class="text-blue-700 text-md font-bold hidden" data-lang="pt"> {{$caption['pt']}} </figcaption>
        <figcaption class="text-blue-700 text-md font-bold hidden" data-lang="en"> {{$caption['en']}} </figcaption>
        <figcaption class="text-blue-700 text-md font-bold hidden" data-lang="fr"> {{$caption['fr']}} </figcaption>

        </div>
    </figure>
</a>