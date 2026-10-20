<article class="objective-activity sm:p-5">
    <div class="w-full">
        <div data-container="translator">
            <h4 class="font-semibold text-sky-900 text-lg" data-lang="es">
                Actividad {{ $id }}
            </h4>
            <h4 class="font-semibold text-sky-900 text-lg" data-lang="pt">
                Atividade {{ $id }}
            </h4>
            <h4 class="font-semibold text-sky-900 text-lg" data-lang="en">
                Activity {{ $id }}
            </h4>
            <h4 class="font-semibold text-sky-900 text-lg" data-lang="fr">
                Activité {{ $id }}
            </h4>
        </div>
        <div data-container="translator">
            <p data-lang="es">
                {{ $description['es'] }}
            </p>
            <p class="hidden" data-lang="pt">
                {{ $description['pt']}}
            </p>
            <p class="hidden" data-lang="en">
                {{ $description['en']}}
            </p>
            <p class="hidden" data-lang="fr">
                {{ $description['fr']}}
            </p>
        </div>
    </div>
</article>
