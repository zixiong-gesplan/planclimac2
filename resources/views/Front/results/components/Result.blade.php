<div class="border  w-36 h-36 sm:w-40 sm:h-40 md:w-44 md:h-44 bg-sky-800 rounded-lg place-self-center">
    <div class="flex flex-col items-center justify-evenly h-full p-1 sm:p-2" data-container="translator">
        <p class="text-center text-white text-xs sm:text-sm" data-lang="es">{{ $text['es'] ?? '' }}</p>
        <p class="text-center text-white text-xs sm:text-sm hidden" data-lang="pt">{{ $text['pt'] ?? '' }}</p>
        <p class="text-center text-white text-xs sm:text-sm hidden" data-lang="en">{{ $text['en'] ?? '' }}</p>
        <p class="text-center text-white text-xs sm:text-sm hidden" data-lang="fr">{{ $text['fr'] ?? '' }}</p>
    </div>
</div>