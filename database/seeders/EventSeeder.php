<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                "name"=>"Yoga celebration in Handstand",
                "text"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'ssurvived",
                "date"=>"25 March 2016",
                "hour"=>"10AM - 12AM",
                "place"=>1
            ],
            [
                "name"=>"zaeaezaezaezaezae in Handstand",
                "text"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'ssurvived",
                "date"=>"30 Juillet 2026",
                "hour"=>"13AM - 17AM",
                "place"=>0
            ],
        ]);
    }
}
