<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foodtruck')->insert([
            'name' => 'Gyros King',
            'location' => 'Göteborg Centrum'
        ]);
    }
}
