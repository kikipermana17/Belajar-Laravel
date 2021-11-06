<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class supliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama' => 'Rahmat', 'alamat' => 'Bandung', 'kode_pos' => 40259, 'kota' => 'Bandung'],
            ['nama' => 'Wudy', 'alamat' => 'Jakarta', 'kode_pos' => 40244, 'kota' => 'Jakarta'],
            ['nama' => 'Dadang', 'alamat' => 'Surabaya', 'kode_pos' => 40255, 'kota' => 'Surabaya'],
            ['nama' => 'Ucup', 'alamat' => 'Malang', 'kode_pos' => 40222, 'kota' => 'Malang'],
            ['nama' => 'Wahyu', 'alamat' => 'Yogya', 'kode_pos' => 40211, 'kota' => 'Yogya'],
        ];

//Masukan Data ke database
        DB::table('supliers')->insert($suplier);

    }
}
