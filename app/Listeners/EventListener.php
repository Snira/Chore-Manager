<?php

namespace App\Listeners;

use App\Chore;
use App\Events\UserActivater;
use App\Events\UserDeactivater;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListener
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
     * Handle the event.
     *
     * @param  UserActivater  $event
     * @param UserDeactivater $event
     *
     * @return void
     */
    public function handle(UserActivater $event)
    {
        $days = [ 'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag' ];
        $chores = Chore::all();
        $users = User::all()->toArray();


        foreach ($chores as $chore) {
            $nextuser = next($users);
            if($nextuser == false){
                reset($users);
                $user = current($users);
            }
            if($nextuser == true){
                $user = $nextuser;
            }

            var_dump($user);

            $user->chores()->attach('Chore');



        }

    }
}
