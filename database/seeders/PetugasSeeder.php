<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level = ['petugas','admin'];
        for ($i=0; $i < 10; $i++) { 
            DB::table('officers')->insert([
                'username' => Str::random(10),
                'password' => Str::random(10),
                'nama_petugas' => Str::random(10),
                'level' => $level[array_rand($level)],
            ]);
        }
    }
}
