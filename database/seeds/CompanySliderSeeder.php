<?php

use Illuminate\Database\Seeder;

class CompanySliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        \DB::table('slider_companies')->delete();
        
        \DB::table('slider_companies')->insert(array (
            0 => 
            array (
                'id' => 2,
                'image' => '16995328441695494503single-project-page-05-img-26.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            1 => 
            array (
                'id' => 3,
                'image' => '16995328521695494535single-project-page-05-img-15.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            2 => 
            array (
                'id' => 4,
                'image' => '16995328621695494503single-project-page-05-img-26.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
