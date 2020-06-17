<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('general_settings')->insert([
            'site_title' => 'TNT Hot Wings And BBQ',
            'logo_image_url' => '/img/clipart-restaurant-restaurant-logo-5.png',
            'address_1' => '234 Main st,',
            'address_2' => '',
            'city' => 'Atlanta',
            'state' => 'GA',
            'zipcode' => '30127',
            'phone_number' => '404-267-1231',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
