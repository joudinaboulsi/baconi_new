<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    //
    protected $table = "home_sliders";
    protected $fillable = [
        'background',
        'title',
        'subtitle',
        'link',
        'url',
    ];
}
