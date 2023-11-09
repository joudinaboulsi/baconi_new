<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrincipleSlider extends Model
{
    //
   
    protected $table = "principle_sliders";

    protected $fillable = [
        'image',
        'alt_image',
    ];
}
