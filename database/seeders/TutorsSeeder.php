<?php

namespace Database\Seeders;

use Carbon\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('tutors')->truncate();
        $faker = FakerFactory::create();
        $data = [];
        for ($i = 0; $i < 30; $i++) {
            $data[] = ['name' => $faker->name(), 'subject' => $faker->colorName(), 'phone' => $faker->phoneNumber(), 'email' => $faker->email()];
        }
        DB::table('tutors')->insert($data);
    }
}
