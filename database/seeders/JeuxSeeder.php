<?php

namespace Database\Seeders;

use App\Models\Jeux;
use Illuminate\Database\Seeder;

class JeuxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jeux::updateOrCreate([
            'name' => "La Potion",
            'description' => "Mode de jeu principal avec des défis à réaliser bien accompagné, amis et alcool il faut que sa picole !",
        ]);
    }
}