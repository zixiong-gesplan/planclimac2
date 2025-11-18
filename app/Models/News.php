<?php

namespace App\Models;

use App\Events\NewsCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    //
    protected $fillable = [
        'id',
        'title_es', //Done
        'description_es', //Done
        'short_description_es', //Done
        'title_pt', //Done
        'description_pt', //Done
        'short_description_pt', //Done
        'title_en', //Done
        'description_en', //Done
        'short_description_en', //Done
        'title_fr', //Done
        'description_fr', //Done
        'short_description_fr', //Done
        'image', // Done
        'document', //Done
        'tags', 
    ];

    // protected $dispatchesEvents = [
    //     'created' => NewsCreated::class
    // ];

    protected function casts(): array{
        return [
            'tags' => 'array'
        ];
    }

}
