<div class="border w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 bg-sky-800 rounded-lg place-self-center shadow-lg">
    <div class="flex flex-col items-center justify-evenly h-full p-2 sm:p-4">
        <div data-container="translator">
            <p class="text-center text-white text-xs md:text-md" data-lang="es">
                {{ $title['es'] }}
            </p>
            <p class="hidden text-center text-white text-xs md:text-md" data-lang="pt">
                {{ $title['pt'] }}
            </p>
            <p class="hidden text-center text-white text-xs md:text-md" data-lang="en">
                {{ $title['en'] }}
            </p>
            <p class="hidden text-center text-white text-xs md:text-md" data-lang="fr">
                {{ $title['fr'] }}
            </p>
        </div>
        <div data-container="translator">
            <h1 class="text-white text-md text-center" data-lang="es">
                <span class="md:text-3xl font-semibold">{{ $progress }}</span> de {{ $target }}
            </h1>
            <h1 class="hidden text-white text-md text-center" data-lang="pt">
                <span class="md:text-3xl font-semibold">{{ $progress }}</span> de {{ $target }}
            </h1>
            <h1 class="hidden text-white text-md text-center" data-lang="en">
                <span class="md:text-3xl font-semibold">{{ $progress }}</span> of {{ $target }}
            </h1>
            <h1 class="hidden text-white text-md text-center" data-lang="fr">
                <span class="md:text-3xl font-semibold">{{ $progress }}</span> sur {{ $target }}
            </h1>
        </div>
    </div>
</div>