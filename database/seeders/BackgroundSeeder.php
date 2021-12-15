<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('backgrounds')->insert([
            [
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor pharetra iss neque. Nullam cursus elit sit amet justo interdum facilisis id at tortor.",
                "img"=>"img/slider/slider1.jpg",
                "place"=>0,
                "title"=>"Welcome Our Handstand",
                "subtitle"=>"Keep (Refresh & Strong) Your Body"
            
            ],
            [
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor pharetra iss neque. Nullam cursus elit sit amet justo interdum facilisis id at tortor.",
                "img"=>"img/slider/slider2.jpg",
                "place"=>1,
                "title"=>"Welcome Our Handstand",
                "subtitle"=>"Keep (Refresh & Strong) Your Body"
            ],
        ]);
    }
}
