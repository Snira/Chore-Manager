<?php

use Illuminate\Database\Seeder;
use Symfony\Component\Console\Output\ConsoleOutput;
use App\User;

class AdminUserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = str_random(10);
        $data = ['name' => 'Admin', 'email' => 'Admin@choremanager.nl' ,'role' => User::ROLE_ADMIN, 'password' => $password];

        //This var $password will be sent with the email so the user will know what to login with
        // and it will make a random password for every new user so it's also quite secure

        $user = User::create($data);
        $output = new ConsoleOutput();
        $output->writeln('You can login with email "Admin@choremanager.nl" & password ' .$password);
    }
}
