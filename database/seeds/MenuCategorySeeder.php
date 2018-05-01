<?php

use Illuminate\Database\Seeder;

class MenuCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menuCategory')->insert([
            'title' => 'Huvudrätter',
            'truck_id' => 1,
        ]);

        DB::table('menuCategory')->insert([
            'title' => 'Efterrätter',
            'truck_id' => 1,
        ]);
    }
}
