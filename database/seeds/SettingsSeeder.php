<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'logo' => '1699544987logo-3.png',
                'alt_logo'=>'logo',
                'desc' => 'Through solid affiliations with global firms, Baconi Group is your pillar for success in the Levant and wider Middle East.',
                'facebook' => 'https://www.facebook.com/BaconiGroup',
                'instagram' => 'https://www.instagram.com/baconigroup/?hl=en',
                'linkedin' => 'https://www.linkedin.com/company/baconi-group-holding/',
                'email' => 'info@buildyexample.com',
                'phone' => '+961-4 521 772',
                'created_at' => NULL,
                'updated_at' => '2023-10-09 22:18:42',
            ),
        ));
    }
}
