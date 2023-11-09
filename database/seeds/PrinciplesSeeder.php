<?php

use Illuminate\Database\Seeder;

class PrinciplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('principle_sliders')->delete();
        
        \DB::table('principle_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                
                'image' => '169952793616954921221.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            1 => 
            array (
                'id' => 2,
                
                'image' => '169952795516954924972.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            2 => 
            array (

                'id' => 3,
                'image' => '169952797216954921363.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            3 => 
            array (
                'id' => 4,
                
                'image' => '169952798516954925184.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            4 => 
            array (
                'id' => 5,
                
                'image' => '169952799616954925267 (1).png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            5 => 
            array (
                'id' => 6,
                
                'image' => '169952801316954925388.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            6 => 
            array (
                'id' => 7,
                
                'image' => '1699528038169549218412.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            7 => 
            array (
                'id' => 8,
                
                'image' => '1699528095169549219313.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            8 => 
            array (
                'id' => 9,
                
                'image' => '1699528113169549232514.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

          
            9 => 
            array (
                'id' => 10,
                'image' => '1699528131169549258815.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         

            10 => 
            array (
                'id' => 11,
                'image' => '1699528159169549261416.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            11=> 
            array (
                'id' => 12,
                
                'image' => '1699528174169549262517.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            12 => 
            array (
                'id' => 13,
                'image' => '1699528184169549263318.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            13=> 
            array (
                'id' => 14,
                'image' => '1699528195169549264419.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
