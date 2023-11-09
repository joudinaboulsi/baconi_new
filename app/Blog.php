<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    protected $table = "blogs";
    protected $fillable = [
        'title',
        'by',
        'date',
        'image',
        'text_blog',
        'title1',
        'title2',
        'title3',
        'title4',
        'title5',
        'title6',
        'title7',
        'title8',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_image',
        'alt_image',
    ];
}
