<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $table = 'news';

    public $fillable = [
        'img_cover',
        'title',
        'content',
        'view'
    ];
}
