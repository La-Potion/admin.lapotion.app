<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::updateOrCreate([
            'type_ref' => "KI",
            'name' => "Kicéki",
            'description' => "Tous le monde doit élire le joueur qui corresponds le mieux à l'affirmation. Cheh pour lui."
        ]);
        Type::updateOrCreate([
            'type_ref' => "DP",
            'name' => "Débat Parallèle",
            'description' => "Par le moyen d'un 'Noir ou Blanc' votez pour l'affirmation de votre choix. Non, ce n'est pas un débat d'extrème droite."
        ]);
        Type::updateOrCreate([
            'type_ref' => "FV",
            'name' => "Fini vite",
            'description' => "Le joueur à 5s pour donner des réponses en rapport avec le thème. On parle pas de ta vie sexuelle."
        ]);
        Type::updateOrCreate([
            'type_ref' => "PC",
            'name' => "Père Castor",
            'description' => "Tous le monde doit, tour à tour répéter et ajouter un mot à l'histoire. (Ta capté la ref)."
        ]);
        Type::updateOrCreate([
            'type_ref' => "TA",
            'name' => "Tasumepa",
            'description' => "Il s'agit simplement d'un 'Action ou Vérité'. T'assume du coup ?"
        ]);
        Type::updateOrCreate([
            'type_ref' => "CC",
            'name' => "C'est chiant",
            'description' => "Le joueur doit réaliser l'action pendant la durée donnée. Courage."
        ]);
        Type::updateOrCreate([
            'type_ref' => "CA",
            'name' => "Colla't",
            'description' => "Tous le monde doit réaliser l'action. (Désolé)."
        ]);
    }
}