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
        $subjects = ['matematyka', 'j.polski', 'j.angielski', 'j.niemiecki', 'biologia', 'geografia', 'chemia', 'informatyka', 'historia', 'fizyka'];
        for ($i = 0; $i < 30; $i++) {
            $data[] = ['first_name' => $faker->firstName(), 'last_name' => $faker->lastName(), 'subject' => $subjects[$faker->numberBetween(0, 9)], 'rate' => $faker->numberBetween(1, 6), 'phone' => $faker->phoneNumber(), 'email' => $faker->email()];
        }
        DB::table('tutors')->insert($data);
    }
}
