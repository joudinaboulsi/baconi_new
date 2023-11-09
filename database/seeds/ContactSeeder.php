<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'background' => '16995337161695493825single-project-page-04-img01.jpg',
                'logo_contact' => '16995335821695493826single-project-page-04-img02.jpg',
                'title_header' => 'CONTACT US',
                'subtitle_header' => 'PREMIUM LIFESTYLE BRAND',
                'title_contact' => 'How we can help you?',
                'subtitle_contact' => 'Fill out the form and we’ll be in touch soon!',
                'title_career' => 'How we can help you?',
                'subtitle_career' => 'We are always looking for talented and professional specialists with a passion for progress in the region. If you have expertise in one of the fields we operate in and want to be part of Baconi Group Holding.',
                'title_address' => 'Fill out the form and we’ll be in touch soon!',
                'subtitle_address' => 'Baconi offices round the world',
                'image_address' => '16995444851695493826contact-us-classic-01.jpg',
                'icon_lb' => '16995443781695493826contact-us-img-flag-01.png',
                'icon_jordan' => '16995443781695493826contact-us-img-flag-01.png',
                'icon_cyprus' => '16995443781695493826contact-us-img-flag-01.png',
                'title1'=>'Lebanon-Beirut',
                'title2'=>'Nicosia, Cyprus',
                'title3'=>'Aqaba, Jordan',
                'location1'=>'location',
                'location2'=>'location',
                'location3'=>'location',
                'phone1'=>'+9614 521 772',
                'phone2'=>'+9614 521 772',
                'phone3'=>'+9614 521 772',
                'email1'=>'info@baconigroup.com',
                'email2'=>'info@baconigroup.com',
                'email3'=>'info@baconigroup.com',
                'title_media'=>'At Baconi Group Holding, we care about your comments, questions, and ideas.',
                'title_section1'=>'At Baconi Group Holding, we care about your comments, questions, and ideas.',
                'title_tab1'=>'Get in touch',
                'title_tab2'=>'Career',


                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
