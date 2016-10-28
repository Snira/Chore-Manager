<?php

use Illuminate\Database\Seeder;
use App\Events\BuildTable;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(ChoreSeeder::class);
        $this->call(UserSeeder::class);
        event(new BuildTable);
    }
}
