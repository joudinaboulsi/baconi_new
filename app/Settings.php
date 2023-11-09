<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = "settings";
    protected $fillable = [

        'logo',
        'alt_logo',
        'desc',
        'facebook',
        'instagram',
        'linkedin',
        'email',
        'phone',
    ];
}
