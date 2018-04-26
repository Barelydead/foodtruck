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
        DB::table('foodtrucks')->insert([
            'name' => 'Gyros King',
            'location' => 'Göteborg Centrum'
        ]);

        DB::table('foodtrucks')->insert([
            'name' => 'Kebab Queen',
            'location' => 'Mölndal station'
        ]);

        DB::table('foodtrucks')->insert([
            'name' => 'Pizza Prince',
            'location' => 'Tuve centrum'
        ]);
    }
}
