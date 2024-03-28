<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Stagiaire;

class StagiairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        Stagiaire::factory()->count(50)->create();
        
    }
}

// for ($i = 0; $i < 100; $i++) {
//     DB::table("stagiaires")->insert([
//         'nom' => fake()->name,
//         'prenom' => fake()->name,
//         'email' =>fake()->email,
//         'adresse' => fake()->city,
//     ]);
// }
//         // 'nom' => Str::random(10),
//         // 'prenom' => Str::random(10),
//         // 'email' => Str::random(10) . '@gmail.com',
//         // 'email' =>fake()->safeEmail,
//         // 'adresse' => Str::random(20),
