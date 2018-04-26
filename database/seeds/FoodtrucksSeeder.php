<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodtruckSeeder extends Seeder
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
            'location' => 'Göteborg Centrum',
            'description' => 'test desc',
            'user_id' => 1
        ]);

        DB::table('foodtrucks')->insert([
            'name' => 'Kebab Queen',
            'description' => 'test desc',
            'location' => 'Mölndal station',
            'user_id' => 2
        ]);

        DB::table('foodtrucks')->insert([
            'name' => 'Pizza Prince',
            'description' => 'test desc',
            'location' => 'Tuve centrum'
        ]);
    }
}
