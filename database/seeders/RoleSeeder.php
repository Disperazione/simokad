<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert(array(
            array(
                'name' => 'Guru',
            ),
            array(
                'name' => 'Kepala Program',
            ),
            array(
                'name' => 'Wali Kelas',
            ),
            array(
                'name' => 'Kurikulum',
            ),
        ));
    }
}
