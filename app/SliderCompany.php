<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderCompany extends Model
{
    //

    protected $table = "slider_companies";

    protected $fillable = [
        'image',
    ];
}
