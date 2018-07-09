<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    public $table = 'about_page';

    public $fillable = [
        'title',
        'content'
    ];
}
