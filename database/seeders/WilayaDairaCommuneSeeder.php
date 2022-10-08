<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayaDairaCommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $wilaya_sql = public_path('../database/seeders/src/wilayas.sql');
        $sql = file_get_contents($wilaya_sql);
        DB::unprepared($sql);

        $dairas_sql = public_path('../database/seeders/src/dairas.sql');
        $sql = file_get_contents($dairas_sql);
        DB::unprepared($sql);

        $communes_sql = public_path('../database/seeders/src/communes.sql');
        $sql = file_get_contents($communes_sql);
        DB::unprepared($sql);

    }
}
