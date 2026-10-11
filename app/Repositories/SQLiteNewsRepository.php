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
        return $this->news->newQuery()
            ->orderByDesc('created_at')
            ->orderByDesc('id')
            ->offset(($page - 1) * 10)
            ->limit(10)
            ->get();
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
