<?php

namespace Database\Seeders;

use App\Models\Technicien;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TechnicienSeeder extends Seeder
{

    public function run()
    {
        Technicien::create([
            'nom' => 'Dupont',
            'prenom' => 'Jean',
            'specialite' => 'Mécanique générale'
        ]);

        Technicien::create([
            'nom' => 'Martin',
            'prenom' => 'Paul',
            'specialite' => 'Électricité automobile'
        ]);
    }
}
