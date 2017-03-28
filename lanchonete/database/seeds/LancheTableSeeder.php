<?php

use Illuminate\Database\Seeder;

class LancheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Lanche::truncate();
        factory(\App\Lanche::class, 10)->create();
    }
}
