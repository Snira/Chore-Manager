<?php

use Illuminate\Database\Seeder;

class ChoreSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chores')->insert([
            [
                'name'        => 'Tafeldekken',
                'description' => 'Dekken van de tafel voor het eten'
            ],
            [
                'name'        => 'Boodschappen',
                'description' => 'Boodschappen doen voor de lunch'

            ],
            [
                'name'        => 'Afwas',
                'description' => 'De lunchtafel leeghalen, opruimen, en alles vaat in de vaatwasser plaatsen'

            ],
            [
                'name'        => 'Afsluiten',
                'description' => 'Ramen sluiten, verwarming uit zetten en eventueel vuilnis wegbrengen indien nodig'
            ]
        ]);
    }
}
