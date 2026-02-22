@extends('Back/layouts')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />

<div class="w-3/4 mx-auto">

    <form action="{{route('admin.news.store')}}" method="post" enctype="multipart/form-data" class="" novalidate>
        @csrf
        <div class="grid gap-4">
            <div class="">
                <label for="title_es" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo (ES)</label>
                <input required type="text" name="title_es" id="title_es" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Título de la noticia" required="">
            </div>
            <div class="">
                <label for="title_pt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo (PT)</label>
                <input required type="text" name="title_pt" id="title_pt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Título de la noticia" required="">
            </div>
            <div class="">
                <label for="title_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo (EN)</label>
                <input required type="text" name="title_en" id="title_en" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Título de la noticia" required="">
            </div>
            <div class="">
                <label for="title_fr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo (FR)</label>
                <input required type="text" name="title_fr" id="title_fr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Título de la noticia" required="">
            </div>
            <div class="flex items-center justify-center w-full">
                <label for="thumbnail" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    Imagen
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Haz click</span> o arrastra la imagen</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input name="thumbnail" id="thumbnail" type="file" class="hidden" accept="image/*" required/>
                </label>
            </div>
            <div class="mt-4 w-full">
                <img id="thumbnailPreview" alt="Preview" class="hidden w-full object-cover rounded-lg border mx-auto">
                {{-- Mensaje cuando no hay imagen --}}
                <p id="thumbnailEmpty" class="text-xs text-gray-500 text-center">No hay imagen seleccionada</p>
            </div>

            <div class="flex items-center justify-center w-full">
                <label for="document" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    PDF
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Haz click</span> o arrastra el documento</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Solo PDFs</p>
                    </div>
                    <input name="document" id="document" type="file"class="hidden" accept="application/pdf"  />
                </label>
            </div> 
        </div>

        <div class="flex-col md:flex w-full gap-4 pb-20">
            <div class="w-full">
                <label for="description_es" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción (ES)</label>
                <div id="editor-description-es">
                </div>
                <textarea required  name="description_es" id="description_es" rows="8" class="hidden p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Texto de la noticia"></textarea>
            </div>
            <div class="w-full">
                <label for="description_pt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción (PT)</label>
                <div id="editor-description-pt">
                </div>
                <textarea required  name="description_pt" id="description_pt" rows="8" class="hidden p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Texto de la noticia"></textarea>
            </div>
            <div class="w-full">
                <label for="description_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción (EN)</label>
                <div id="editor-description-en">
                </div>
                <textarea required  name="description_en" id="description_en" rows="8" class="hidden p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Texto de la noticia"></textarea>
            </div>
            <div class="w-full">
                <label for="description_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción (FR)</label>
                <div id="editor-description-fr">
                </div>
                <textarea required  name="description_fr" id="description_fr" rows="8" class="hidden p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Texto de la noticia"></textarea>
            </div>                   
            <div class="w-full">
                <label for="short_description_es" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción Corta (ES)</label>
                <textarea required name="short_description_es" id="short_description_es" rows="4" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Descripción corta de la noticia"></textarea>
            </div>
            <div class="w-full">
                <label for="short_description_pt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción Corta (PT)</label>
                <textarea required name="short_description_pt" id="short_description_pt" rows="4" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Descripción corta de la noticia"></textarea>
            </div>
            <div class="w-full">
                <label for="short_description_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción Corta (EN)</label>
                <textarea required name="short_description_en" id="short_description_en" rows="4" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Descripción corta de la noticia"></textarea>
            </div>
            <div class="w-full">
                <label for="short_description_fr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción Corta (FR)</label>
                <textarea required name="short_description_fr" id="short_description_fr" rows="4" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Descripción corta de la noticia"></textarea>
            </div>
        </div>
        <button type="submit" class="inline-flex items-center px-5 py-2 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-sky-900 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
            Crear Noticia
        </button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<script>
    const input = document.getElementById('thumbnail');
    const preview = document.getElementById('thumbnailPreview');
    const emptyMsg = document.getElementById('thumbnailEmpty');

    const updatePreview = (file) => {
            if (!file) {
                preview.src = '';
                preview.classList.add('hidden');
                emptyMsg.classList.remove('hidden');
                return;
            }
            // Solo imágenes
            if (!file.type.startsWith('image/')) {
                alert('El archivo seleccionado no es una imagen válida.');
                input.value = '';
                preview.src = '';
                preview.classList.add('hidden');
                emptyMsg.classList.remove('hidden');
                return;
            }
            const reader = new FileReader();
            reader.onload = (e) => {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                emptyMsg.classList.add('hidden');
            };
            reader.readAsDataURL(file);
        };

        input.addEventListener('change', (e) => {
            const file = e.target.files && e.target.files[0];
            updatePreview(file);
        });

        const quill_es = new Quill('#editor-description-es', {
            theme: 'snow'
        });
        quill_es.on('text-change', () => {
            const html = quill_es.root.innerHTML;
            document.getElementById('description_es').value = html;
        });

        const quill_pt = new Quill('#editor-description-pt', {
            theme: 'snow'
        });
        quill_pt.on('text-change', () => {
            const html = quill_pt.root.innerHTML;
            document.getElementById('description_pt').value = html;
        });

        const quill_en = new Quill('#editor-description-en', {
            theme: 'snow'
        });
        quill_en.on('text-change', () => {
            const html = quill_en.root.innerHTML;
            document.getElementById('description_en').value = html;
        });
        const quill_fr = new Quill('#editor-description-fr', {
            theme: 'snow'
        });
        quill_fr.on('text-change', () => {
            const html = quill_fr.root.innerHTML;
            document.getElementById('description_fr').value = html;
        });
</script>
@endsection
