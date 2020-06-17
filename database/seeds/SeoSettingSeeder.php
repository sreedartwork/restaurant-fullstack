<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Billy's Burger is an American multinational chain of hamburger fast food restaurants. Headquartered in the unincorporated area of Miami-Dade County, Florida, the company was founded in 1953 as Insta-Billy's Burger, a Jacksonville, Florida–based restaurant chain.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => "Award winning TNT Hot Wings has been around since 1990 and is
            one of Atlanta's favorite hot-spots.",
            'keywords' => "BBQ, Local BBQ, TNT Hot Wings, Salads, Best BBQ In Town",
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
