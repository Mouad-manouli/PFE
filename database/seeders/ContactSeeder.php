<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'Description' => 'Contact A',
            'entreprise_id' => 1, 
            'machine_id' => 2, 
        ]);

        Contact::create([
            'Description' => 'Contact B',
            'entreprise_id' => 2, 
            'machine_id' => 3, 
        ]);
    }
}
