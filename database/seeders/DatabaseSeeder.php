<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           RoleSeeder::class,
           PricingSeeder::class,
           TrainerSeeder::class,
           UserSeeder::class,
           AboutSeeder::class,
           BackgroundSeeder::class,
           ClasseSeeder::class,
           EventSeeder::class,
           FooterSeeder::class,
           GallerySeeder::class,
           LogoSeeder::class,
           NavSeeder::class,
           ScheduleSeeder::class,
           TestimonialsSeeder::class,
           TitreSeeder::class,
           MapSeeder::class
        ]);
    }
}
