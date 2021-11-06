<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pesanansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan' => 'Rahmat', 'nama_barang' => 'Baju', 'qty' => 1, 'tgl_pesan' => '2015 - 05 - 06'],
            ['nama_pelanggan' => 'Wudy', 'nama_barang' => 'Celana', 'qty' => 2, 'tgl_pesan' => '2015 - 05 - 06'],
            ['nama_pelanggan' => 'Ucup', 'nama_barang' => 'Kameja', 'qty' => 1, 'tgl_pesan' => '2015 - 05 - 06'],
            ['nama_pelanggan' => 'Dadang', 'nama_barang' => 'Gamis', 'qty' => 1, 'tgl_pesan' => '2015 - 05 - 06'],
            ['nama_pelanggan' => 'Wahyu', 'nama_barang' => 'Jaket', 'qty' => 2, 'tgl_pesan' => '2015 - 05 - 06'],
        ];

//Masukan Data ke database
        DB::table('pesanans')->insert($pesanan);

    }
}
