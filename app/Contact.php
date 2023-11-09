<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $table = "contacts";
    protected $fillable = [
        
        'background',
        'logo_contact',
        'title_header',
        'subtitle_header',
    
        'title_contact',
        'subtitle_contact',
        'title_career',
        'subtitle_career',
        'title_address',
        'subtitle_address',
        'image_address',
        'icon_lb',
        'icon_jordan',
        'icon_cyprus',
        'title1',
        'title2',
        'title3',
        'location1',
        'location2',
        'location3',
        'phone1',
        'phone2',
        'phone3',
        'email1',
        'email2',
        'email3',
        'title_media',
        'title_section1',
        'title_tab1',
        'title_tab2',

    ];
}
