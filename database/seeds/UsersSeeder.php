<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'john doe',
            'email' => 'john@doe.se',
            'password' => bcrypt('johndoe')
        ]);

        DB::table('users')->insert([
            'name' => 'jane doe',
            'email' => 'jane@doe.se',
            'password' => bcrypt('janedoe')
        ]);
    }
}
