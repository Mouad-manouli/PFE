<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rapport;

class RapportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rapport::create([
            'DateDebut' => now(),
            'DateFin' => now(),
            'Etat_machine' => 'En fonctionnement',
            'Description' => 'Rapport A',
            'entreprise_id' => 1, 
            'machine_id' => 2,
            'employé_id' => 1, 
        ]);

        Rapport::create([
            'DateDebut' => now(),
            'DateFin' => now(),
            'Etat_machine' => 'En panne',
            'Description' => 'Rapport B',
            'entreprise_id' => 2, 
            'machine_id' => 3, 
            'employé_id' => 2, 
        ]);
    }
}
