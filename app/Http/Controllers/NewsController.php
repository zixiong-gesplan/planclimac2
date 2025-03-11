<?php

namespace App\Http\Controllers;

use App\Interfaces\NewsRepositoryInterface;
use App\Services\NewsService;

use Illuminate\Http\Request;

use App\Models\News;


class NewsController extends Controller
{

    private $news;

    public function __construct(NewsService $news) {
        $this->news = $news;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $news = $this->news->index();
        return view('Front.news.index', ['news' => $news]);
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
        //
        // dd($request->all());
        $data = $request->all();
        $news = News::create([
            'tags' => [],
            'title' => $data['title'],
            'short_description' => $data['short_description'] ?? 'No aparece short_description',
            'description' => $data['description'] ?? 'No aparece description',
            'image' => $data['image'] ?? 'No aparece image',
            'document' => $data['document'] ?? 'No aparece document',
        ]);
        // $news->increment('');
        $news->save();
        return view('Front.news.index', ['news' => News::all()]);
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
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
