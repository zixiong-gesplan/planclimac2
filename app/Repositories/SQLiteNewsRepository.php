<?php

namespace App\Repositories;

use App\Interfaces\NewsRepositoryInterface;
use App\Models\News;

class SQLiteNewsRepository implements NewsRepositoryInterface
{
    protected $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    public function index(int $page)
    {
        return $this->news::all()->sortByDesc('created_at')->forPage($page, 10);
    }
    public function count()
    {
        return $this->news::count();
    }
    public function show($id)
    {
        return $this->news::findOrFail($id);
    }

    public function store($data)
    {
        return $this->news::create($data);
    }

    public function update($data, $id)
    {
        $news = $this->news::findOrFail($id);
        $news->fill($data);
        $news->save();
        return $news;
    }

    public function destroy($id)
    {
        $news = $this->news::findOrFail($id);
        $news->delete();
        return false;
    }
}
