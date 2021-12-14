<?php

namespace Database\Seeders;

use App\Models\Mode;
use Illuminate\Database\Seeder;

class ModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mode::updateOrCreate([
            'name' => "Glouglou",
            'description' => "Bon début de soirée ! Ou des petits joueurs...",
        ]);
        Mode::updateOrCreate([
            'name' => "Picoletro",
            'description' => "C'est plus que bouré que tu l'es là maintenant.",
        ]);
        Mode::updateOrCreate([
            'name' => "Avale",
            'description' => "Aussi chaud que le nom... (A faire avec un groupe mixte)",
        ]);
    }
}