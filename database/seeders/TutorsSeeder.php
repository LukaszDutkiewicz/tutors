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
        $subjects = ['matematyka', 'j.polski', 'j.angielski', 'j.niemiecki', 'biologia', 'geografia', 'chemia', 'informatyka', 'historia', 'fizyka'];
        $data = [];

        for ($i = 0; $i < 30; $i++) {
            $data[] = ['first_name' => $faker->firstName(), 'last_name' => $faker->lastName(), 'rate' => $faker->numberBetween(1, 6), 'phone' => $faker->phoneNumber(), 'email' => $faker->email(), 'subject_id' => $faker->numberBetween(1, 10)];
        }
        DB::table('tutors')->insert($data);
    }
}
