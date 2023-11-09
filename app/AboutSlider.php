<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutSlider extends Model
{
    //
    protected $table= "about_sliders";
    
    protected $fillable = [
        'image',
        'alt_image'
    ];
}
