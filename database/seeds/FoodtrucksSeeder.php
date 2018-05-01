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
            'country' => 'Sweden',
            'city' => 'Göteborg',
            'description' => 'This is the best gyros truck in town. Come visit us if you would like to eat like a king.',
            'user_id' => 1
        ]);

        DB::table('foodtrucks')->insert([
            'name' => 'Kebab Queen',
            'country' => 'Sweden',
            'city' => 'Göteborg',
            'user_id' => 2
        ]);

        DB::table('foodtrucks')->insert([
            'name' => 'Pizza Prince',
            'description' => 'test desc',
            'country' => 'Sweden',
            'city' => 'Göteborg'
        ]);
    }
}
