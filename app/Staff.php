<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public $table = 'staff';

    public $fillable = [
        'full_name',
        'position',
        'img_staff'
    ];
}
