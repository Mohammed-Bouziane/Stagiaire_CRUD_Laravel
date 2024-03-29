<?php

namespace Database\Seeders;

use App\Models\Stagiaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StagiairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //! using for loop
        // for ($i = 0; $i < 10; $i++) {
        //     DB::table('stagiaires')->insert([
        //         'nom' => fake()->name,
        //         'prenom' => fake()->name,
        //         'email' => fake()->email,
        //         'adresse' => fake()->city,

        //! using Str and random functions
        // 'nom' => Str::random(10),
        // 'prenom' => Str::random(10),
        // 'email' => Str::random(10) . '@gmail.com',
        // 'email' =>fake()->safeEmail,
        // 'adresse' => Str::random(20),
        //     ]);
        // }
        Stagiaire::factory()->count(10)->create();
    }

};
