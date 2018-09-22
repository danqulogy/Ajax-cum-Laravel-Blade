<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the app's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(EmployeesTableSeeder::class);
    }
}
