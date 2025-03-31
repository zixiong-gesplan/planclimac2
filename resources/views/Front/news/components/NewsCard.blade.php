<div class="flex flex-col sm:flex-row w-full gap-4 md:gap-8 py-10 border-l-2 border-slate-100">
    <aside class="my-2 md:my-4 w-full md:w-1/2 flex flex-col h-full">
        <h1 class="font-bold text-base md:text-2xl text-sky-900 text-balance md:text-wrap line-clamp-3 border-l-4 border-sky-900 pl-4"> {{$title}}</h1>
        <div class="flex items-baseline flex-wrap pl-4">
            {{-- <h2 class="font-medium text-sm md:text-md text-blue-400"> {{$created_at}} </h2> 
            <span class="px-1 md:px-2 text-sm md:text-md">
            -
            </span>
            --}}
            {{-- @foreach( $tags as $tag)
                <a href="" class="capitalize [&:not(:last-child)]:after:content-[','] p-1 text-xs md:text-sm ">{{$tag}}</a>
            @endforeach --}}
        </div>
        <p class="text-sm md:text-base text-balance md:text-wrap line-clamp-6 pl-4">
            {!! $description !!}
        </p>
        <a href="/news/{{$id}}" class="mt-2 text-sky-900 p-4 rounded-sm font-bold">Leer más ></a>
    </aside>
    <div class="w-full md:w-1/2 "> 
        <a href="/news/{{$id}}" class="bg-white rounded-lg overflow-hidden flex flex-col items-center shadow-lg mx-auto size-72">
            <img src="{{asset($src)}}" alt="" class="rounded-lg w-full h-full" width="160" height="160"/>
        </a>
    </div>

</div>