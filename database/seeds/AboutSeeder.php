<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'background' => '16995272461695493074about-us-bg.jpg',
                'subtitle_page' => 'Your cargo, our expertise! Elevate your shipments today!',
                'title_page' => 'About our company',
                'image' => '16995272461695493476WhatsApp Image 2023-09-05 at 13.02.45.jpg',
                'alt_image' => 'Alt Image',
                'title_section1' => 'Who we are',
                'text_section1' => '<p>Baconi Group Holding is one of the largest diversified holding groups in the MENA region, with several firms specialized in different sectors, including transportation and logistics, marine & cargo surveyors, and oil and gas consultancy. With a solid presence throughout the Levant and the wider Middle East, Baconi Group Holding supports businesses in realizing growth through its comprehensive services, visionary management, knowledgeable investment team, and motivation to bring added value and distinction to its partners.<br> Our dynamic team of professionals, hands on approach to management and technological edge, enable Baconi Group Holding to stay ahead of market and industry trends, and adapt to our ever changing environment.</p><br> Each of the companies within Baconi Group Holding is a leader in its respective sector and is renowned for overall efficiency and effective specialized solutions. With solid affiliations with global firms, Baconi Group Holding is your pillar for success in the Levant and wider Middle East.</p>',
                'title_section2' => 'Principles',
                'text_section2' => '<p> In our pursuit of excellence, Baconi Group Holding, through its range of affiliates, has earned the trust and privilege to represent and work with several prominent multinational principles and top names in each industry:</p>',
                'title_section3' => 'Memberships',
                
                'text_section3' => '<p>Each affiliate within Baconi Group Holding is a proud member of various regional syndicates as well as international associations:</p>',
                'title_section4' => 'Corporate Social Responsibility',
                'text_section4' => '<p> Baconi Group Holding is not only here to help your business grow. We focus on giving back to the community by being an active corporate citizen. At Baconi Group, our contribution includes monthly and yearly donations to various NPOs and charity foundations such as SOS, Rafic Al Tofol (Child protection) Association, and the Cancer Center.</p>
                <br> As for protecting the environment, Baconi Group Holding takes recycling very seriously at all offices and locations, and supports initiatives that reduce waste and encourage sustainability for a greener world.</p>',
                'title_team' => 'Our Team',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
