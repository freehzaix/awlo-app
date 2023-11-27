<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisponibiliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('disponibilites')->insert(['libelle' => 'Disponible']);
        DB::table('disponibilites')->insert(['libelle' => 'Indisponible']);
    }
}
