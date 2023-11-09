<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TitlePage extends Model
{
    //

    protected $table = 'title_pages';

    protected $fillable = [
        'title',
        'subtitle',
    ];
}
