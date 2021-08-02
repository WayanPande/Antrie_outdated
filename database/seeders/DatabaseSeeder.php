<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            'nama_kategori' => "Event",
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => "Layanan Kesehatan",
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => "Layanan Publik",
        ]);
    }
}
