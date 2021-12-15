<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers')->insert([
            [
                "name"=>"John Do",
                "img"=>"img/trainer/trainer1.jpg",
                "type"=>"1",
                "url1"=>"https://www.facebook.com/",
                "url2"=>"https://twitter.com/",
                "url3"=>"https://dribbble.com/",
                "url4"=>"https://www.pinterest.com/",
            ],
            [
                "name"=>"Ching Chong",
                "img"=>"img/trainer/trainer2.jpg",
                "type"=>"0",
                "url1"=>"https://www.facebook.com/",
                "url2"=>"https://twitter.com/",
                "url3"=>"https://dribbble.com/",
                "url4"=>"https://www.pinterest.com/",
            ],
            [
                "name"=>"Akira Siyozaki",
                "img"=>"img/trainer/trainer3.jpg",
                "type"=>"0",
                "url1"=>"https://www.facebook.com/",
                "url2"=>"https://twitter.com/",
                "url3"=>"https://dribbble.com/",
                "url4"=>"https://www.pinterest.com/",
            ], [
                "name"=>"Coach 4",
                "img"=>"img/trainer/trainer4.jpg",
                "type"=>"0",
                "url1"=>"https://www.facebook.com/",
                "url2"=>"https://twitter.com/",
                "url3"=>"https://dribbble.com/",
                "url4"=>"https://www.pinterest.com/",
            ], [
                "name"=>"Coach 5",
                "img"=>"img/trainer/trainer5.jpg",
                "type"=>"0",
                "url1"=>"https://www.facebook.com/",
                "url2"=>"https://twitter.com/",
                "url3"=>"https://dribbble.com/",
                "url4"=>"https://www.pinterest.com/",
            ],
            [
                "name"=>"Coach 6",
                "img"=>"img/trainer/trainer2.jpg",
                "type"=>"0",
                "url1"=>"https://www.facebook.com/",
                "url2"=>"https://twitter.com/",
                "url3"=>"https://dribbble.com/",
                "url4"=>"https://www.pinterest.com/",
            ],[
                "name"=>"Coach 7",
                "img"=>"img/trainer/trainer3.jpg",
                "type"=>"0",
                "url1"=>"https://www.facebook.com/",
                "url2"=>"https://twitter.com/",
                "url3"=>"https://dribbble.com/",
                "url4"=>"https://www.pinterest.com/",
            ],[
                "name"=>"Coach 8",
                "img"=>"img/trainer/trainer4.jpg",
                "type"=>"0",
                "url1"=>"https://www.facebook.com/",
                "url2"=>"https://twitter.com/",
                "url3"=>"https://dribbble.com/",
                "url4"=>"https://www.pinterest.com/",
            ],[
                "name"=>"Coach 9",
                "img"=>"img/trainer/trainer5.jpg",
                "type"=>"0",
                "url1"=>"https://www.facebook.com/",
                "url2"=>"https://twitter.com/",
                "url3"=>"https://dribbble.com/",
                "url4"=>"https://www.pinterest.com/",
            ],[
                "name"=>"Coach 10",
                "img"=>"img/trainer/trainer1.jpg",
                "type"=>"0",
                "url1"=>"https://www.facebook.com/",
                "url2"=>"https://twitter.com/",
                "url3"=>"https://dribbble.com/",
                "url4"=>"https://www.pinterest.com/",
            ],
        ]);
    }
}
