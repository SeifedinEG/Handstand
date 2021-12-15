<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                "email"=>"username@gmail.com",
                "number"=>"+32 485 118218",
                "adresse"=>"insert address here",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a convallis nulla. UtLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur asus."
            ],
        ]);
    }
}
