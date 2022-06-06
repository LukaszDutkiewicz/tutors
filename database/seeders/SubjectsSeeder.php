<?php

namespace Database\Seeders;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker=FakerFactory::create();
        $data = [];
        $subjects = ['matematyka', 'j.polski', 'j.angielski', 'j.niemiecki', 'biologia', 'geografia', 'chemia', 'informatyka', 'historia', 'fizyka'];
        foreach ($subjects as $subject) {
            $data[] = ['name' => $subject];
        }
        DB::table('subjects')->insert($data);
    }
}
