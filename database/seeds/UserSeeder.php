<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email'        => 'Antwan@example.nl',
                'name' => 'Antwan',
                'password' => '741852',
                'role' => 'user'
            ],
            [
                'email'        => 'Michel@exmaple.com',
                'name' => 'Michel',
                'password' => '741852',
                'role' => 'user'

            ],

        ]);
    }
}
