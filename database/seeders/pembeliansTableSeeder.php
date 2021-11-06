<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembeliansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang' => 'Baju', 'nama_suplier' => 'Rahmat', 'qty' => 1, 'tgl' => '2020 - 10 - 10'],
            ['nama_barang' => 'Kameja', 'nama_suplier' => 'Wudy', 'qty' => 2, 'tgl' => '2020 - 11 - 11'],
            ['nama_barang' => 'Baju', 'nama_suplier' => 'Dadang', 'qty' => 1, 'tgl' => '2020 - 10 - 10'],
            ['nama_barang' => 'Jaket', 'nama_suplier' => 'Wahyu', 'qty' => 2, 'tgl' => '2021 - 10 - 10'],
            ['nama_barang' => 'Gamis', 'nama_suplier' => 'Ucup', 'qty' => 1, 'tgl' => '2022 - 11 - 11'],
        ];

        //Masukan Data ke database
        DB::table('pembelians')->insert($pembelian);

    }
}
