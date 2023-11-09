<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{ 
    //
    protected $table = "home_pages";
    protected $fillable = [ 
        
        'icon1',
        'icon2',
        'icon3',
        'icon4',
        'title1',
        'subtitle1',
        'title2',
        'subtitle2',
        'title3',
        'subtitle3',
        'title4',
        'subtitle4',
        'counter1',
        'title1_count',
        'subtitle1_count',
        'image_count',
        'years',
        'counter2',
        'title2_count',
        'subtitle2_count',
        'logo',
        'subtitle_section1',
        'title_section1',
        'image_section1',
        'text_consultancy',
        'text2_section1',
        'text3_section1',
        'text4_section1',


        'image1_service',
        'image2_service',
        'image3_service',

        'title1_service',
        'title2_service',
        'title3_service',

        'p1_service',
        'p2_service',
        'p3_service',
        'video',
        'title_video',
        'subtitle_video',
        'link_video',
        'company1',
        'company2',
        'company3',
        'company4',
       'alt_company1',
       'alt_company2',
       'alt_company3',
       'alt_company4',
    
    ];
}
