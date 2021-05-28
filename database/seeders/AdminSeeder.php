<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
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
            DB::table('admin')->insert(array(
                'name' => $faker->name,
                'avatar' => 'avatars/default.png',
                'username' => $faker->userName,
                'password' => Hash::make("admin$i"),
            ));
        }
    }
}
