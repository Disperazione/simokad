<?php
namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('guru')->insert(array(
                'name' => $faker->name,
                'avatar' => 'avatar/default.png',
                'role' => $faker->numberBetween($min = 1, $max = 4),
                'email' => $faker->freeEmail,
                'username' => $faker->userName,
                'password' => Hash::make("guru$i"),
            ));
        }
    }
}
