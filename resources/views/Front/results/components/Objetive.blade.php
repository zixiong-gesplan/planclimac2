<div data-container="translator">
<h2 class="w-full text-xl text-sky-700 text-center my-4" data-lang="es">
        {{ $title['es'] ?? '' }}
    </h2>
    <h2 class="hidden w-full text-xl text-sky-700 text-center my-4" data-lang="pt">
        {{ $title['pt'] ?? '' }}
    </h2>
    <h2 class="hidden w-full text-xl text-sky-700 text-center my-4" data-lang="en">
        {{ $title['en'] ?? '' }}
    </h2>
    <h2 class="hidden w-full text-xl text-sky-700 text-center my-4" data-lang="fr">
        {{ $title['fr'] ?? '' }}
    </h2>
</div>

<div data-container="translator">
    <p class="my-4" data-lang="es">
        {{ $subtitle['es'] ?? '' }}
    </p>
    <p class="hidden my-4" data-lang="pt">
        {{ $subtitle['pt'] ?? '' }}
    </p>
    <p class="hidden my-4" data-lang="en">
        {{ $subtitle['en'] ?? '' }}
    </p>
    <p class="hidden my-4" data-lang="fr">
        {{ $subtitle['fr'] ?? '' }}
    </p>
</div>