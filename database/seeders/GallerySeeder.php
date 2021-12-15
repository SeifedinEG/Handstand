<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            ["img"=>"img/portfolio/gal.jpg"],
            ["img"=>"img/portfolio/gal2.jpg"],
            ["img"=>"img/portfolio/gal3.jpg"],
            ["img"=>"img/portfolio/gal4.jpg"],
            ["img"=>"img/portfolio/gal5.jpg"],
            ["img"=>"img/portfolio/gal6.jpg"],
        ]);
    }
}
