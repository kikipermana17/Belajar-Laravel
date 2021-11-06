<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class barangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama' => 'Baju', 'varian' => 'RGB', 'harga_beli' => 150000, 'harga_jual' => 180000],
            ['nama' => 'Celana', 'varian' => 'RGB', 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['nama' => 'Koko', 'varian' => 'RGB', 'harga_beli' => 100000, 'harga_jual' => 130000],
            ['nama' => 'Gamis', 'varian' => 'RGB', 'harga_beli' => 80000, 'harga_jual' => 100000],
            ['nama' => 'Jaket', 'varian' => 'RGB', 'harga_beli' => 300000, 'harga_jual' => 350000],
        ];

        //Masukan Data ke database
        DB::table('barangs')->insert($barang);

    }
}
