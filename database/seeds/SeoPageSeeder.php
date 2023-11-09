<?php

use Illuminate\Database\Seeder;

class SeoPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('seo_pages')->delete();
        
        \DB::table('seo_pages')->insert(array (
        0 => 
            array (
                'id' => 1,
                'page' => 'Home',
                'meta_title' => 'HomePage| meta title',
                'meta_description' => '<p>meta description</p>',
                'meta_keywords' => '<p>Home| meta keywords</p>',
                'image' => '1696783756activities-2.jpg',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 16:49:16',
            ),
            1 => 
            array (
                'id' => 2,
                'page' => 'About',
                'meta_title' => 'meta title',
                'meta_description' => '<p>meta description</p>',
                'meta_keywords' => '<p>meta keywords</p>',
                'image' => '1696783785nous-connaitre-img1.jpg',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 16:49:45',
            ),
            2 => 
            array (
                'id' => 3,
                'page' => 'Services',
                'meta_title' => 'meta title',
                'meta_description' => '<p>meta description</p>',
                'meta_keywords' => '<p>meta keywords</p>',
                'image' => '1696783816nous-connaitre-img4.jpg',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 16:50:16',
            ),
            3 => 
            array (
                'id' => 4,
                'page' => 'Companies',
                'meta_title' => 'meta title',
                'meta_description' => '<p>meta description</p>',
                'meta_keywords' => '<p>meta keywords</p>',
                'image' => '1696783839nous-connaitre-img3.jpg',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 16:50:39',
            ),
            4 => 
            array (
                'id' => 5,
                'page' => 'Blog',
                'meta_title' => 'meta title',
                'meta_description' => '<p>meta description</p>',
                'meta_keywords' => '<p>meta keywords</p>',
                'image' => '1696783864activities-1.jpg',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 16:51:04',
            ),
            5 => 
            array (
                'id' => 6,
                'page' => 'Contact',
                'meta_title' => 'meta title',
                'meta_description' => '<p>meta description</p>',
                'meta_keywords' => '<p>meta keywords</p>',
                'image' => '1696783890nous-connaitre-main1.jpg',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 16:51:30',
            ),
           
        ));
    }
}
