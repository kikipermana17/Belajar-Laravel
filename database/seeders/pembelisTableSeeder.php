<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama' => 'Rahmat', 'jeniskelamin' => 'Laki-Laki', 'alamat' => 'Bandung', 'kode_pos' => 40259, 'kota' => 'Bandung', 'tgl_lahir' => '2005 - 10 - 10'],
            ['nama' => 'Wudy', 'jeniskelamin' => 'Laki-Laki', 'alamat' => 'Jakarta', 'kode_pos' => 40244, 'kota' => 'jakarta', 'tgl_lahir' => '2007 - 20 - 20'],
            ['nama' => 'Dadang', 'jeniskelamin' => 'Laki-Laki', 'alamat' => 'Surabaya', 'kode_pos' => 40251, 'kota' => 'Surabaya', 'tgl_lahir' => '2004 - 11 - 11'],
            ['nama' => 'Ucup', 'jeniskelamin' => 'Laki-Laki', 'alamat' => 'Malang', 'kode_pos' => 40252, 'kota' => 'Malang', 'tgl_lahir' => '2006 - 10 - 10'],
            ['nama' => 'Wahyu', 'jeniskelamin' => 'Laki-Laki', 'alamat' => 'Yogya', 'kode_pos' => 40254, 'kota' => 'Yogya', 'tgl_lahir' => '2007 - 01 - 07'],
        ];

        //Masukan Data ke database
        DB::table('pembelis')->insert($pembeli);

    }
}
