<?php

namespace App\Http\Controllers;

use App\Interfaces\NewsRepositoryInterface;
use App\Services\NewsService;
use Illuminate\Http\Request;
use App\Models\News;
use App\Events\NewsCreated;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    private $news;

    public function __construct(NewsService $news) {
        $this->news = $news;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $page = $request->query('page');

        if ($page) {
            $page = (int) $page;
        } else {
            $page = 1;
        }
        $news = $this->news->index($page);
        $count = $this->news->count();
        return view('Front.news.index', [
            'news' => $news,
            'count' => $count/10
        ]);
    }
    public function adminIndex()
    {
        $news = $this->news->getAll();
        return view('Back.home.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Back.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'document' => 'nullable|mimes:pdf|max:10240', // 10MB

            'title_es' => 'required|string|max:255',
            'title_pt' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_fr' => 'required|string|max:255',

            'short_description_es' => 'required|string|max:1000',
            'short_description_pt' => 'required|string|max:1000',
            'short_description_en' => 'required|string|max:1000',
            'short_description_fr' => 'required|string|max:1000',

            'description_es' => 'required|string',
            'description_pt' => 'required|string',
            'description_en' => 'required|string',
            'description_fr' => 'required|string',
        ]);

        // Guardar thumbnail con nombre único (no pisas archivos)
        $thumbPath = $request->file('thumbnail')->store('images', 'public');
        $thumbUrl = Storage::url($thumbPath); // /storage/images/xxxx.jpg

        // Guardar PDF (si viene)
        $docUrl = null;
        if ($request->hasFile('document')) {
            $docPath = $request->file('document')->store('documents', 'public');
            $docUrl = Storage::url($docPath); // /storage/documents/xxxx.pdf
        }

        News::create([
            'tags' => [], // asegúrate de que en el modelo sea cast a array/json
            'title_es' => $validated['title_es'],
            'short_description_es' => $validated['short_description_es'],
            'description_es' => $validated['description_es'],

            'title_pt' => $validated['title_pt'],
            'short_description_pt' => $validated['short_description_pt'],
            'description_pt' => $validated['description_pt'],

            'title_en' => $validated['title_en'],
            'short_description_en' => $validated['short_description_en'],
            'description_en' => $validated['description_en'],
            
            'title_fr' => $validated['title_fr'],
            'short_description_fr' => $validated['short_description_fr'],
            'description_fr' => $validated['description_fr'],

            'image' => $thumbUrl,
            'document' => $docUrl,
        ]);

        return back()->with('success', 'La noticia está creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
        return view('Front.news.show', ['post' => $this->news->show($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = $this->news->show($id);
        return view('Back.news.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'document' => 'nullable|mimes:pdf|max:10240', // 10MB

            'title_es' => 'required|string|max:255',
            'title_pt' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_fr' => 'required|string|max:255',

            'short_description_es' => 'required|string|max:1000',
            'short_description_pt' => 'required|string|max:1000',
            'short_description_en' => 'required|string|max:1000',
            'short_description_fr' => 'required|string|max:1000',

            'description_es' => 'required|string',
            'description_pt' => 'required|string',
            'description_en' => 'required|string',
            'description_fr' => 'required|string',
        ]);

        $news = $this->news->show($id);

        if ($request->hasFile('thumbnail')) {
            // Borrar la imagen anterior si existe
            if ($news->image) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $news->image));
            }
            $thumbPath = $request->file('thumbnail')->store('images', 'public');
            $validated['image'] = Storage::url($thumbPath);
        }

        if ($request->hasFile('document')) {
            // Borrar el documento anterior si existe
            if ($news->document) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $news->document));
            }
            $docPath = $request->file('document')->store('documents', 'public');
            $validated['document'] = Storage::url($docPath);
        }

        $this->news->update($validated, $id);

        return back()->with('success', 'La noticia ha sido actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = $this->news->show($id);

        if ($news->image) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $news->image));
        }

        if ($news->document) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $news->document));
        }

        $this->news->destroy($id);

        return back()->with('success', 'La noticia ha sido eliminada');
    }
}
