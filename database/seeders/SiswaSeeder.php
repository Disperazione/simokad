<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 120; $i++) {
            DB::table('siswa')->insert(array(
                'name' => $faker->name,
                'avatar' => 'avatar/default.png',
                'id_kelas' => $faker->numberBetween(1, 3),
                'nipd' => $faker->nik(),
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'password' => Hash::make("siswa$i"),
            ));
        }

    }
}
