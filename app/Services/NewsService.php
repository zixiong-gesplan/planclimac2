<?php
namespace App\Services;

use App\Interfaces\NewsRepositoryInterface;

class NewsService{
    protected $news;

    public function __construct(NewsRepositoryInterface $news){
        $this->news = $news;
    }

 
    public function index()
    {
        $news = $this->news->index();
        return $news;
    }
    
    public function store($data)
    {
        $news = $this->news->store($data);
        return $news;
    }
    
    public function show($id)
    {
        $news = $this->news->show($id);
        return $news;
    }
    
    public function update($data, $id)
    {
        $news = $this->news->update($data, $id);
        return $news;
    }
    
    public function destroy($id)
    {
        $news = $this->news->destroy($id);
        return $news;
    }

}