<?php

use Illuminate\Database\Seeder;

class MenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menuItems')->insert([
            'title' => 'Gyrosrulle',
            'description' => 'Världens bästa rulle',
            'price' => '120kr',
            'truck_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('menuItems')->insert([
            'title' => 'plankstek',
            'description' => 'Den klassiska planksteken',
            'price' => '249kr',
            'truck_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('menuItems')->insert([
            'title' => 'Mango smoothie',
            'description' => 'Sweet mango drink',
            'price' => '19kr',
            'truck_id' => 1,
            'category_id' => 2,
        ]);

        DB::table('menuItems')->insert([
            'title' => 'Gyrosrulle',
            'description' => 'Världens bästa rulle',
            'price' => '120kr',
            'truck_id' => 2,
            'category_id' => 4,
        ]);

        DB::table('menuItems')->insert([
            'title' => 'plankstek',
            'description' => 'Den klassiska planksteken',
            'price' => '249kr',
            'truck_id' => 2,
            'category_id' => 2,
        ]);

        DB::table('menuItems')->insert([
            'title' => 'Mango smoothie',
            'description' => 'Sweet mango drink',
            'price' => '19kr',
            'truck_id' => 3,
            'category_id' => 5,
        ]);
    }
}
