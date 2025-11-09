<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::truncate(); // Hapus semua data lama
        Mahasiswa::factory()->count(10)->create();
    }
}
