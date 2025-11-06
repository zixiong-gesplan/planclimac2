<div class="flex flex-col border-t-2 border-sky-800 gap-8 py-8">
    <div class="flex flex-col sm:flex-row gap-16 mt-8 w-10/12 mx-auto">
        <div class="w-full sm:w-3/12 place-self-center">
            <!-- <img src="https://interregmac.org/wp-content/uploads/2023/07/Group-9.jpg" alt="" class="w-full"> -->
            <img src="/images/PLANCLIMAC2_AMARILLO.svg" alt="Logo PLANCLIMAC2" class="w-8/12 mb-2">
            <div class="flex flex-row">
                <a target="_blank" href="https://www.youtube.com/@proyectoplanclimac1715">
                    <svg class="w-12 h-12 text-gray-800 dark:text-white hover:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
            <div>
                <p class="font-bold text-sky-800">
                    © 2025 Planclimac2.
                </p>
            </div>
        </div>
        <div class="w-full sm:w-9/12 flex gap-4">
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 sm:gap-16">
                @foreach ($partners as $p)
                    <x-footer-card 
                        :title="$p['title']"
                        location=" {{ $p['location'] }} "
                    />
                @endforeach
            </div>
        </div>
    </div>
</div>