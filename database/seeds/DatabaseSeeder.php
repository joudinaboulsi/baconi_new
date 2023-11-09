<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(AboutSliderSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(CompanySliderSeeder::class);
        $this->call(HomePageSeeder::class);
        $this->call(HomeSliderSeeder::class);
        $this->call(MembershipSeeder::class);
        $this->call(PrinciplesSeeder::class);
        $this->call(SeoPageSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ServiceTabOneSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(TitlePageSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(ContactSeeder::class);
        
    }
}
