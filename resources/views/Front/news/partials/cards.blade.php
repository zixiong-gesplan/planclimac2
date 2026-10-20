@foreach ($news as $n)
    <x-NewsCard
        src="{{ $n['image'] }}"
        :title="[
            'es' => $n['title_es'],
            'pt' => $n['title_pt'],
            'en' => $n['title_en'],
            'fr' => $n['title_fr'],
        ]"
        :description="[
            'es' => $n['short_description_es'],
            'pt' => $n['short_description_pt'],
            'en' => $n['short_description_en'],
            'fr' => $n['short_description_fr'],
        ]"
        id="{{ $n['id'] }}"
    />
@endforeach
