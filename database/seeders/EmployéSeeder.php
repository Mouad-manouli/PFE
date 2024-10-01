<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employé;

class EmployéSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        Employé::create([
            'Nom_emp' => 'Employé 1',
            'Sexe' => 'M',
            'Age' => 30,
            'Tel' => '0123456789',
            'Ville' => 'Ville 1',
            'AdrPhysique_emp' => 'Adresse 1',
            'AdrEmail_emp' => 'employe1@example.com',
            'Type_emp' => 'Type 1',
            'Specialite_emp' => 'Spécialité 1',
            'Password_emp'=>bcrypt('password1'),
        ]);

        Employé::create([
            'Nom_emp' => 'Employé 2',
            'Sexe' => 'F',
            'Age' => 25,
            'Tel' => '9876543210',
            'Ville' => 'Ville 2',
            'AdrPhysique_emp' => 'Adresse 2',
            'AdrEmail_emp' => 'employe2@example.com',
            'Type_emp' => 'Type 2',
            'Specialite_emp' => 'Spécialité 2',
            'Password_emp' => bcrypt('Password2')
        ]);
    }
}
