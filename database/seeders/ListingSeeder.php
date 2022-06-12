<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $listins = [];
        for ($i=0; $i < 10; $i++) {
            $listing = [
                'title' =>  $faker->text(),
                'description' => $faker->text(300),
                'location' => $faker->text(),
                'user_id' => 1
            ];
            $listings[] = $listing;
        }
        DB::table('listings')->insert($listings);
    }

}
