<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    public $table = "inbox";

    public $fillable = [
        'subject',
        'email',
        'name',
        'message',
        'read'
    ];
}
