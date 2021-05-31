<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 3; $i++) {
            DB::table('kelas')->insert(array(
                'id_walikelas' => $faker->numberBetween($min = 1, $max = 10),
                'name' => "XI Rekayasa Perangkat Lunak $i",
                'slug' => "XI RPL $i",
            ));
        }

    }
}
