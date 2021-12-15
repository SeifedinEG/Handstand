<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            [
                "name"=>"Yoga For Climers",
                "trainer_id"=> 1,
                "schedule"=>"10.00Am-05:00Pm",
                "categorie"=>"mixte",
                "img"=>"img/class/1.jpg",
            ],
            [
                "name"=>"Yoga For Climbers",
                "trainer_id"=> 1,
                "schedule"=>"10.00Am-05:00Pm",
                "img"=>"img/class/2.jpg",
                "categorie" => "homme",

            ],
            [
                "name"=>"Yoga for Climbers",
                "trainer_id"=> 3,
                "schedule"=>"10.00Am-05:00Pm",
                "img"=>"img/class/3.jpg",
                "categorie" => "femme",
            ],
        ]);
    }
}
