<div class="flex flex-col sm:flex-row w-full gap-4 md:gap-8 py-10 border-l-2 border-slate-100">
    <aside class="my-2 md:my-4 w-full md:w-1/2 flex flex-col h-full">
        <div data-container="translator">
            <h1 class="font-bold text-base md:text-2xl text-sky-900 text-balance md:text-wrap line-clamp-3 border-l-4 border-sky-900 pl-4" data-lang="es">
                {{$title['es']}}
            </h1>
            <h1 class="font-bold text-base md:text-2xl text-sky-900 text-balance md:text-wrap line-clamp-3 border-l-4 border-sky-900 pl-4 hidden" data-lang="pt">
                {{$title['pt']}}
            </h1>
            <h1 class="font-bold text-base md:text-2xl text-sky-900 text-balance md:text-wrap line-clamp-3 border-l-4 border-sky-900 pl-4 hidden" data-lang="en">
                {{$title['en']}}
            </h1>
            <h1 class="font-bold text-base md:text-2xl text-sky-900 text-balance md:text-wrap line-clamp-3 border-l-4 border-sky-900 pl-4 hidden" data-lang="fr">
                {{$title['fr']}}
            </h1>
        </div>
        <div data-container="translator">
            <p class="text-sm md:text-base text-balance md:text-wrap line-clamp-6 pl-4" data-lang="es">
                {!! $description['es'] !!}
            </p>
            <p class="text-sm md:text-base text-balance md:text-wrap line-clamp-6 pl-4 hidden" data-lang="pt">
                {!! $description['pt'] !!}
            </p>
            <p class="text-sm md:text-base text-balance md:text-wrap line-clamp-6 pl-4 hidden" data-lang="en">
                {!! $description['en'] !!}
            </p>
            <p class="text-sm md:text-base text-balance md:text-wrap line-clamp-6 pl-4 hidden" data-lang="fr">
                {!! $description['fr'] !!}
            </p>
        </div>

        <a href="/news/{{$id}}" class="mt-2 text-sky-900 p-4 rounded-sm font-bold">Leer más ></a>
    </aside>
    <div class="w-full md:w-1/2 "> 
        <a href="/news/{{$id}}" class="bg-white rounded-lg overflow-hidden flex flex-col items-center shadow-lg mx-auto size-72">
            <img src="{{$src}}" alt="" class="rounded-lg w-full h-full" width="160" height="160"/>
        </a>
    </div>

</div>