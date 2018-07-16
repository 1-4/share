<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $table = 'gallery';

    public $fillable = [
        'image'
    ];
}
