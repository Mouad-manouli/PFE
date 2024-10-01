<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contrat;

class ContratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contrat::create([
            'Type_cnt' => 'Contrat A',
            'DateDebut_cnt' => now(),
            'DateFin_cnt' => now()->addYear(),
            'DateControle_cnt' => now()->addMonths(6),
            'NumCarte' => '1234567890',
            'Date_exp' => now()->addYears(2),
            'CodeSecurite' => '123',
            'AdrFacturation' => 'Adresse A',
            'NumCompte' => '987654321',
            'RIB' => 'RIB A',
            'entreprise_id' => 1,
        ]);

        Contrat::create([
            'Type_cnt' => 'Contrat B',
            'DateDebut_cnt' => now(),
            'DateFin_cnt' => now()->addYear(),
            'DateControle_cnt' => now()->addMonths(6),
            'NumCarte' => '0987654321',
            'Date_exp' => now()->addYears(2),
            'CodeSecurite' => '456',
            'AdrFacturation' => 'Adresse B',
            'NumCompte' => '123456789',
            'RIB' => 'RIB B',
            'entreprise_id' => 2, 
        ]);
    }
}
