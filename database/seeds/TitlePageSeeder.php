<?php

use Illuminate\Database\Seeder;

class TitlePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        \DB::table('title_pages')->delete();
        
        \DB::table('title_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Latest from our blog',
                'subtitle' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:20:09',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Related posts',
                'subtitle' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 17:30:48',
            ),
         
        ));
        
        
    
    }
}
