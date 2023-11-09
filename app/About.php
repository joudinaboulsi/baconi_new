<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $table = "abouts";

    protected $fillable = [
        'background',
        'subtitle_page',
        'title_page',
        'image',
        'title_section1',
        'text_section1',
        'title_section2',
        'text_section2',
        'title_section3',
        'text_section3',
        'title_section4',
        'text_section4',
        'alt_image',
        'title_team'
    
    ];
}
