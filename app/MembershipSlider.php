<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipSlider extends Model
{
    //

    protected $table = "membership_sliders";

    protected $fillable = [
        'image',
        'alt_image',
    ];
}
