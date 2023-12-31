<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'nama'=> 'Globalindo Inti Sarana',
            'alamat'=>'Jl. Kedoya Raya, Jakarta Barat Ruko Kedoya Indah',
            'email'=>'globalindo.intisarana@yahoo.com',
            'notelpon'=>'0215835515'
        ]);
        //
    }
}
