<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'Email' => 'admin1',
            'Password' => bcrypt('admin1'),
        ]);

        Admin::create([
            'Email' => 'admin2',
            'Password' => bcrypt('admin2'),
        ]);
    }
}
