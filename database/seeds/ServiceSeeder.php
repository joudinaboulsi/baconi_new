<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'video' => '1699530688video.mp4',
                'subtitle_page' => 'we are a creative design studio',
                'title_page' => 'At Baconi Group Holding, we care about your comments, questions, and ideas.',
                'title_section1' => 'BACONI GROUP HOLDING',
                'subtitle_section1' => 'We help our clients build value digital web solutions',
                'text_section1' => 'Connecting Beirut to the world, one shipment at a time. Let’s optimize your supply chain today',
                'link_section1' => 'Get in touch',
                'url_section1' => 'http://localhost:8000/contact-us',
                'image' => '1699530688169549307422.jpg',
                'alt_image' => 'image',
                
                'title_section2' => 'Our services',
                'title_tab1' => 'Transportation and Logistics',
                'title_tab2' => 'Protection & Indemnity',
                'title_tab3' => 'Consultancy',
                'small_title_tab2'=>'Protection & Indemnity',
                'image_tab2'=>'16995308074.jpg',
                'icon_tab2'=>'1699530807favicon_ultra.png',
                'alt_image_tab2'=>'Image',
                'text_tab2'=>'Through its dedicated and professional affiliate, representing top protection and indemnity clubs, Baconi Group Holding, empowers you with efficient cost-saving solutions and proper assistance in protecting, handling and investigating any claim related matters from personal injury (crew, passengers and third parties) to cargo, hull & Machinery & equipment damage.',
                'text2_tab2'=>'Baconi Group Holding also offers resourceful and systematic marine and cargo survey services, including Hull and Machinery that includes the inspection and examination of all types of marine vessels from yachts to LNG carriers, container and cruise liners, and issuing global standards reports.',

                'image_tab3'=>'16995308076 (1).jpg',
                'icon_tab3'=>'1699530807favicon.png',
                'alt_image_tab3'=>'Image',
                'small_title_tab3'=>'Consultancy',
                'text_tab3'=>'Baconi Group Holding offers you advisory services across a vast range of sectors in the MENA region, including oil and gas, renewable energy, industrials, and chemicals to properly guide you to make the most of the promising markets in the Levant and wider Middle East.',
                'text2_tab3'=>'Baconi Group Holding assists you with strategy formulation and policy making. Bringing industry specific knowledge to the forefront, empowering private and public clients with insightful advice that shapes informed decision making.',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
