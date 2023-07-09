<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('obats')->insert([
            'nama'=> 'Antasida',
            'stok'=>'20',
            'pemroduksi'=>'Kimia Farma',
            'harga'=>'10.000'
        ]);
    }
}
