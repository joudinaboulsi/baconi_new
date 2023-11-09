<?php

use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('membership_sliders')->delete();
        
        \DB::table('membership_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                
                'image' => '169952822116954920391.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            1 => 
            array (
                'id' => 2,
                
                'image' => '169952826416954920552.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            2 => 
            array (

                'id' => 3,
                'image' => '169952827416954920633 (1).jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            3 => 
            array (
                'id' => 4,
                
                'image' => '169952829016954920704.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            4 => 
            array (
                'id' => 5,
                
                'image' => '169952830216954920805.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            5 => 
            array (
                'id' => 6,
                
                'image' => '169952831316954920897.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            6 => 
            array (
                'id' => 7,
                
                'image' => '169952833116954920897.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            7 => 
            array (
                'id' => 8,
                
                'image' => '169952834716954920968.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
