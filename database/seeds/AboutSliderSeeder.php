<?php

use Illuminate\Database\Seeder;

class AboutSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('about_sliders')->delete();
        
        \DB::table('about_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                
                'image' => '16995285011695493476WhatsApp Image 2023-09-05 at 13.02.45.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            1 => 
            array (
                'id' => 2,
                
                'image' => '16995285111695493496WhatsApp Image 2023-09-05 at 13.02.45.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
        
         
        ));
    }
}
