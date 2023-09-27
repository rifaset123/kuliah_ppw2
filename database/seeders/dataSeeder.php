<?php

namespace Database\Seeders;

use App\Models\data_mahasiswa;
use App\Models\dataMahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // menghubungkan seeder dengan factory
        dataMahasiswa::factory(10)->create();
    }
}
