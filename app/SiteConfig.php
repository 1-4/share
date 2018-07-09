<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    public $table = 'site_config';

    public $fillable = [
        'logo',
        'phone_number',
        'email',
        'address',
        'top_text_banner',
        'top_detail_text_banner',
        'top_img_banner',
        'bottom_text_banner',
        'bottom_detail_text_banner',
        'bottom_img_banner',
        'facebook',
        'instagram',
        'twitter',
    ];
}
