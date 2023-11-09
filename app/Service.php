<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $table = "services";
    protected $fillable = [
        'video',
        'subtitle_page',
        'title_page',
        'title_section1',
        'subtitle_section1',
        'text_section1',
        'link_section1',
        'url_section1',
        'image',
        'alt_image',
        'title_section2',
        'title_tab1',
        'title_tab2',
        'title_tab3',
        'icon_tab2',
        'small_title_tab2',
        'image_tab2',
        'alt_image_tab2',
        'text_tab2',
        'text2_tab2',
        'icon_tab3',
        'small_title_tab3',
        'image_tab3',
        'alt_image_tab3',
        'text_tab3',
        'text2_tab3',
        'text_tab1',
      
    ];
}
