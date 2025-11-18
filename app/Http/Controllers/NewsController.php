<?php

namespace App\Http\Controllers;

use App\Interfaces\NewsRepositoryInterface;
use App\Services\NewsService;

use Illuminate\Http\Request;
// use Illuminate\Http\UploadFile;
use App\Models\News;
use App\Events\NewsCreated;

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

        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = $request->all();
        $thumbnail = $request->file('thumbnail');

        $thumbnailName = $thumbnail->getClientOriginalName();
        $thumbnailExtension = $thumbnail->getClientOriginalExtension();
        $thumbnailPath = $thumbnail->storeAs('/public/images',$thumbnailName);
        $attachment = $request->file('document');

        $attachmentPath = null;
        if($attachment != null){
            $attachmentName = $attachment->getClientOriginalName();
            $attachmentExtension = $attachment->getClientOriginalExtension();
            $attachmentPath = $attachment->storeAs('/public/documents',$attachmentName);
            //TO FIXME:
            //Se hace esta asignación por que a veces el pdf no se sube
        }
    
        $news = News::create([
            'tags' => [],
            'title_es' => $data['title_es'],
            'short_description_es' => $data['short_description_es'],
            'description_es' => $data['description_es'],
            'title_pt' => $data['title_pt'],
            'short_description_pt' => $data['short_description_pt'],
            'description_pt' => $data['description_pt'],
            'title_en' => $data['title_en'],
            'short_description_en' => $data['short_description_en'],
            'description_en' => $data['description_en'],
            'title_fr' => $data['title_fr'],
            'short_description_fr' => $data['short_description_fr'],
            'description_fr' => $data['description_fr'],
            'image' => '/storage/'.$thumbnailPath,
            'document' => $attachmentPath ? '/storage/'.$attachmentPath : null,
        ]);

        // $news->save();

        event(new NewsCreated($news));

        return back()->with('success', 'La noticia esta creada');
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
