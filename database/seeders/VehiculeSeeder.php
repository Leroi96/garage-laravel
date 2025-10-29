<?php

namespace Database\Seeders;

use App\Models\Vehicule;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VehiculeSeeder extends Seeder
{

    public function run()
    {
        Vehicule::create([
            'immatriculation' => 'AA-123-BB',
            'marque' => 'Peugeot',
            'modele' => '208',
            'couleur' => 'Rouge',
            'annee' => 2020,
            'kilometrage' => 45000,
            'carrosserie' => 'Citadine',
            'energie' => 'Essence',
            'boite' => 'Manuelle'
        ]);

        Vehicule::create([
            'immatriculation' => 'CC-456-DD',
            'marque' => 'Renault',
            'modele' => 'Clio',
            'couleur' => 'Bleu',
            'annee' => 2019,
            'kilometrage' => 60000,
            'carrosserie' => 'Compacte',
            'energie' => 'Diesel',
            'boite' => 'Automatique'
        ]);
    }
}
