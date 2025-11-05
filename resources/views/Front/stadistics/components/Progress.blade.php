<div>
    <div data-container="translator">
        <p data-lang="es"> {{ $title['es'] ?? '' }} </p>
        <p class="hidden" data-lang="pt"> {{ $title['pt'] ?? '' }} </p>
        <p class="hidden" data-lang="en"> {{ $title['en'] ?? '' }} </p>
        <p class="hidden" data-lang="fr"> {{ $title['fr'] ?? '' }} </p>
    </div>
    <div data-container="translator">
        <p data-lang="es">
            Meta del proyecto: {{ $progress }} de {{ $target }}.
        </p>
        <p class="hidden" data-lang="pt">
            Meta do projeto: {{ $progress }} de {{ $target }}.
        </p>
        <p class="hidden" data-lang="en">
            Project goal: {{ $progress }} of {{ $target }}.
        </p>
        <p class="hidden" data-lang="fr">
            Objectif du projet : {{ $progress }} sur {{ $target }}.
        </p>
    </div>
    <div class="w-full h-4 mb-4 bg-gray-200 rounded-full dark:bg-gray-700">
        <div class="h-4 bg-green-700 rounded-full dark:bg-green-500" style="width: {{ floor($progress/$target *100) }}%"></div>
    </div>
</div>