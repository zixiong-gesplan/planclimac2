<div class="flex flex-col border-t-2 border-lime-500 gap-8">
    {{-- <div class="flex flex-col sm:flex-row gap-16 mt-8">
        <div class="w-full sm:w-2/3 place-self-center">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae quaerat error repellat quibusdam commodi veritatis asperiores iure cumque, quos non ab, laboriosam nisi eaque totam blanditiis maiores eveniet id molestias?
        </div>
        <div class="w-full sm:w-1/3 flex gap-4">
            <div class="w-1/2">
                <h1 class="font-semibold mb-4">SIGUENOS</h1>
                <ul class="flex flex-col gap-2">
                    <li>Instagram</li>
                    <li>Facebook</li>
                    <li>Youtube</li>
                </ul>
            </div>
            <div class="w-1/2">
                <h1 class="font-semibold mb-4 line-clamp-1">AVISO LEGAL</h1>
                <ul class="flex flex-col gap-2">
                    <li>Privacidad</li>
                    <li>Terminos y Condiciones</li>
                </ul>
            </div>
        </div>

    </div> --}}
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 sm:gap-16 pt-4">
        @foreach ($partners as $p)
            <x-footer-card 
                title=" {{ $p['title'] }} "
                location=" {{ $p['location'] }} "
            />
        @endforeach
    </div>
</div>