<?php

namespace App\Interfaces;

interface NewsRepositoryInterface 
{
    
    public function index(int $page);

    public function show($id);

    public function store($data);

    public function update($data,$id);

    public function destroy($id);
}