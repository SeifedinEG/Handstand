<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name"=>"admin",
                "email"=>"admin@admin.com",
                "password"=>Hash::make("Admin123"),
                "role_id"=>1,
                "pack"=>"Other"
            ],
            [
                "name"=>"manager",
                "email"=>"manager@manager.com",
                "password"=>Hash::make("Manager123"),
                "role_id"=>2,
                "pack"=>"Other"

            ],
            [
                "name"=>"coach",
                "email"=> "coach@coach.com",
                "password"=>Hash::make("Coach123"),
                "role_id"=>3,
                "pack"=>"Other"

            ],[
                "name"=>"member",
                "email"=>"member@member.com",
                "password"=>Hash::make("Member123"),
                "role_id"=>4,
                "pack"=>"Other"
            ],
        ]);
    }
}
