<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricings')->insert([
            [
                "name"=>"Silver",
                "price"=>30,
                "text1"=>"Free T-Shirt & swags",
                "text2"=>"Free of all message treatments",
                "text3"=>"Access Clup Facilites",
                "text4"=>"Out Door activites",
            ],[
                "name"=>"Gold",
                "price"=>50,
                "text1"=>"Free T-Shirt & swags",
                "text2"=>"Free of all message treatments",
                "text3"=>"Access Clup Facilites",
                "text4"=>"Out Door activites",
            ],[
                "name"=>"Platinium",
                "price"=>70,
                "text1"=>"Free T-Shirt & swags",
                "text2"=>"Free of all message treatments",
                "text3"=>"Access Clup Facilites",
                "text4"=>"Out Door activites",
            ],
        ]);
    }
}
