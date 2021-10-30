<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['title' => 'Tips Cepat Menikah', 'content' => 'Lorem Ipsum'],
            ['title' => 'Haruskah Menunda Nikah?', 'content' => 'Lorem Ipsum'],
            ['title' => 'Membangun Visi Misi Keluarga', 'content' => 'Lorem Ipsum'],
        ];

        //Masukan Data ke database
        DB::table('posts')->insert($post);
    }
}
