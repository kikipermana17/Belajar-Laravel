<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostsTableSeeder::class);
        $this->call(barangsTableSeeder::class);
        $this->call(pesanansTableSeeder::class);
        $this->call(pembeliansTableSeeder::class);
        $this->call(pembelisTableSeeder::class);
        $this->call(supliersTableSeeder::class);

    }
}
