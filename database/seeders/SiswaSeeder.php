<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('siswas')->insert([
                'nisn' => Str::random(10),
                'nis' => Str::random(10),
                'nama' => Str::random(10),
                'id_kelas' => mt_rand(1,10),
                'alamat' => Str::random(10),
                'no_telp' => Str::random(10),
                'id_spp' => mt_rand(1,10),
            ]);
        }
    }
}
