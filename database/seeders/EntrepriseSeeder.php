<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entreprise;

class EntrepriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entreprise::create([
            'Nom_ent' => 'Entreprise A',
            'Tel_ent' => '0123456789',
            'Ville_ent' => 'Ville A',
            'AdrPhysique_ent' => 'Adresse A',
            'SecteurActivite_ent' => 'Secteur A',
            'Description_ent' => 'Description A',
            'AdrMail_ent' => 'entrepriseA@example.com',
            'Password_ent' => bcrypt('password'),
        ]);

        Entreprise::create([
            'Nom_ent' => 'Entreprise B',
            'Tel_ent' => '0987654321',
            'Ville_ent' => 'Ville B',
            'AdrPhysique_ent' => 'Adresse B',
            'SecteurActivite_ent' => 'Secteur B',
            'Description_ent' => 'Description B',
            'AdrMail_ent' => 'entrepriseB@example.com',
            'Password_ent' => bcrypt('password'),
        ]);

        
    }
}
