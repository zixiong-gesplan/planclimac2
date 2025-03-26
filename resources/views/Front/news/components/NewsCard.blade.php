<div class=" flex flex-col sm:flex-row w-full h-full md:h-[240px] rounded border border-emerald-500  gap-2 md:gap-4 my-4 box-border">
    <img src="{{asset($src)}}" alt="" class="rounded-tl-sm rounded-bl-sm w-full sm:w-[240px] h-full sm:h-[238px] aspect-square" width="160" height="160"/>
    <aside class="my-2 md:my-4 w-full flex flex-col mx-2 h-full box-border ">
        <h1 class="font-bold text-md md:text-xl text-emerald-500 text-balance md:text-wrap line-clamp-2"> {{$title}}</h1>
        <div class="flex items-baseline flex-wrap">
            {{-- <h2 class="font-medium text-sm md:text-md text-blue-400"> {{$created_at}} </h2> --}}
            <span class="px-1 md:px-2 text-sm md:text-md">
            -
            </span>
            {{-- @foreach( $tags as $tag)
                <a href="" class="capitalize [&:not(:last-child)]:after:content-[','] p-1 text-xs md:text-sm ">{{$tag}}</a>
            @endforeach --}}
        </div>
        <p class="text-sm md:text-md text-balance md:text-wrap line-clamp-4 pr-4 ">
            {!! $description !!}
        </p>
        <a href="/news/{{$id}}" class="mt-2 border border-emerald-500 text-emerald-500 px-4 rounded-sm w-28">Leer más</a>
    </aside>

</div>