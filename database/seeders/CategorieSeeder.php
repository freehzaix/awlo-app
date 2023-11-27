<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(['libelle' => 'Maison individuelle']);
        DB::table('categories')->insert(['libelle' => 'Appartement']);
        DB::table('categories')->insert(['libelle' => 'Maison de ville']);
        DB::table('categories')->insert(['libelle' => 'Bureau']);
        DB::table('categories')->insert(['libelle' => 'Magasin']);
        DB::table('categories')->insert(['libelle' => 'Entrepôt']);
        DB::table('categories')->insert(['libelle' => 'Terrain']);
        DB::table('categories')->insert(['libelle' => 'Terrain']);
    }
}
