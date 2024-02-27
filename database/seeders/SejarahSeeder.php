<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sejarahs')->insert([
            'deskripsi' => 'Remaja Mujahidin adalah organisasi remaja yang pengembangan dan potensi remaja',
        ]);
    }
}
