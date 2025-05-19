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
        'title', //Done
        'description', //Done
        'short_description', //Done
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
