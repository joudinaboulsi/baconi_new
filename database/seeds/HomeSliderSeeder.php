<?php

use Illuminate\Database\Seeder;

class HomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('home_sliders')->delete();
        
        \DB::table('home_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                
                'background' => '16995269091695376977shutterstock_2037311816.jpg',
                'title' => 'Baconi Group Holding',
                'subtitle'=>'to lead the market',
                'link'=>'About us',
                'url'=>'about-us',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            1 => 
            array (
                'id' => 2,
                
                'background' => '16995269821695376715aerial-view-container-cargo-ship-sea.jpg',
                'title' => 'Specialized in various sectors',
                'subtitle'=>'Including marine services, logistics, oil and gas consultancy',
                'link'=>'Contact us',
                'url'=>'contact-us',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            2 => 
            array (

                'id' => 3,
                'background' => '16995270451695376993shutterstock_55445227.jpg',
                'title' => 'Alt Global reach and expert advice Image',
                'subtitle'=>Null,
                'link'=>'Services',
                'url'=>'services',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
          
        ));
    }
}
