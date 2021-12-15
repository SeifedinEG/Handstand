<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            [
                "title"=>"Our Classes",
                "subtitle"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem"
            ],
            [
                "title"=>"Class Schedule",
                "subtitle"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem"
            ],
            [
                "title"=>"Our Trainer",
                "subtitle"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem"
            ],
            [
                "title"=>"Our Gallery",
                "subtitle"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem"
            ],
            [
                "title"=>"Awesome (Event)",
                "subtitle"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem"
            ],
            [
                "title"=>"(Pricing) Table",
                "subtitle"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem"
            ],
            [
                "title"=>"Gift Our (Client) Say",
                "subtitle"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem"
            ],
        ]);
    }
}
