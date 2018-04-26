<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
   {
       $this->call('UsersSeeder');
       $this->command->info('User table seeded!');

       $this->call('FoodtruckSeeder');
       $this->command->info('Truck table seeded!');
   }


}
