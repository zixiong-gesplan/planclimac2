<?php

namespace App\Http\Controllers;

use App\Interfaces\NewsRepositoryInterface;
use App\Services\NewsService;

use Illuminate\Http\Request;
// use Illuminate\Http\UploadFile;
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
            'title' => $data['title'],
            'short_description' => $data['short_description'],
            'description' => $data['description'],
            'image' => '/storage/'.$thumbnailPath,
            'document' => $attachmentPath ? '/storage/'.$attachmentPath : null,
        ]);

        $news->save();
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
