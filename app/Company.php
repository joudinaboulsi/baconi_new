<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

    protected $table = "companies";
    protected $fillable = [

        'image',
        'alt_image',
        'logo',
        'text',
        'link',

        'image1',
        'alt_image1',
        'logo1',
        'text1',
        'link1',

        'image2',
        'alt_image2',
        'logo2',
        'text2',
        'link2',
        
        'image3',
        'alt_image3',
        'logo3',
        'text3',
        'link3',
     
    ];
}
