<?php

namespace App\Listeners;

use App\Chore;
use App\Events\BuildTable;
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
     * @param  BuildTable  $event
     *
     * @return void
     */
    public function handle(BuildTable $event)
    {

        $days = [ 'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag' ];
        $chores = Chore::all();
        $users = User::all()->toArray();

        $chores->each(function (Chore $chore) {
            $chore->users()->sync([]);
        });
        //Dit haalt eerst de koppel tabel leeg voordat deze opnieuw gevuld kan worden.

        foreach ($days as $index => $day){
            foreach ($chores as $chore) {
                if(false === $user = next($users)){
                    $user = reset($users);
                }

                $chore->users()->attach($user['id'], ['day' => $index]);
            }
        }
    }
}
