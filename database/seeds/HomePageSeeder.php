<?php

use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('home_pages')->delete();
        
        \DB::table('home_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'icon1' => '16995267171695505084favicon_sea.png',
                'icon2' => '16995268181695505084favicon_sea.png',
                'icon3' => '16995267171695504429favicon_ultra.png',
                'icon4' => '16995267181695504429favicon.png',
                'title1' => 'Who we are',
                'title2' => 'Principles',
                'title3' => 'Memberships',
                'title4' => 'CSR',
                'subtitle1' => 'Easy to customize',
                'subtitle2' => 'Easy to customize',
                'subtitle3' => 'Easy to customize',
                'subtitle4' => 'Easy to customize',

                'counter1' => '157+',
                'title1_count' => 'WORLDWIDE OFFICES',
                'subtitle1_count' => 'Lorem ipsum dolor sit consectetur do eiusmod tempo',
                'image_count' => '1699535240Artboard 2.png',
                'years' => '20',
                'counter2' => '205+',
                'title2_count' => 'HIGH SKILLED PEOPLE',
                'subtitle2_count' => 'Lorem ipsum dolor sit consectetur do eiusmod tempo',
                'logo' => '16995265251695487950Untitled-2-01.png',
                'subtitle_section1' => 'Our Services',
                'title_section1'=>'Consultancy',
                'image_section1'=>'16995263631695489067b.png',
                'text_consultancy'=>'Contact Baconi Group',
                'text2_section1'=>'Provide details about your industry,business,and location to help Baconi Group better understand your needs',
                'text3_section1'=>'Provide details about your industry,business,and location to help Baconi Group better understand your needs',
                'text4_section1'=>'Discuss and agree upon a time frame with Baconi Group for the provision of the required consultancy services',
                'image1_service'=>'16995258261695487950Artboard 1.png',
                'image2_service'=>'16995258261695487950Artboard 2.png',
                'image3_service'=>'16995258261695487950Artboard 3.png',
                'title1_service'=>'Transportation and Logistics',
                'title2_service'=>'Protection & Indemnity',
                'title3_service'=>'Consultancy',
                'p1_service'=>'<p>Baconi Group Holding offers global transportation and logistics services, bridging the gap between merchants and carriers by improving communication and optimizing the work process to ensure cargo gets to the right destination safely and on time.</p>',
                'p2_service'=>'<p>test s</p>',
                'p3_service'=>'<p>test s</p>',
                'video'=>'1699525826video.webm',
                'title_video'=>'video',
                'subtitle_video'=>'video',
                'link_video'=>'video',
                'company1'=>'16995266791695504429FINAL LOGOS BACONI-04.png',
                'company2'=>'16995266791695504429FINAL LOGOS BACONI-02.png',
                'company3'=>'16995266801695505084FINAL LOGOS BACONI-01.png',
                'company4'=>'16995266801695505488FINAL LOGOS BACONI-04.png',
                'alt_company1'=>'alt_company',
                'alt_company2'=>'alt_company',
                'alt_company3'=>'alt_company',
                'alt_company4'=>'alt_company',
               
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
               
        ));
    
    }
}
