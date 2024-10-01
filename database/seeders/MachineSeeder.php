<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Machine;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Machine::create([
            'Materiel' => 'Machine 1',
            'Model' => 'Model 1',
            'Etat' => 'Bon état',
            'entreprise_id' => 1, 
        ]);

        Machine::create([
            'Materiel' => 'Machine 2',
            'Model' => 'Model 2',
            'Etat' => 'Mauvais état',
            'entreprise_id' => 2, 
        ]);
    }
}
