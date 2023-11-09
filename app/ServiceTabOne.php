<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceTabOne extends Model
{
    //

    protected $table = "service_tab_ones";

    protected $fillable = [
        
        'title1',
        'text1',
        'text2',
        'text3',
        'text4',
        'image',
        'alt_image',
        'icon',
    ];
}
