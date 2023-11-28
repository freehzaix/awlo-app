<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Disponibilite;
use App\Models\Propriete;
use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    //Formulaire pour ajouter une propriété
    public function form_ajouter_propriete(){
        $disponibilites = Disponibilite::all();
        $categories = Categorie::all();

        return view('propriete.ajouter', compact('disponibilites', 'categories'));
    }

    //Liste des propriétés dans un tableau HTML
    public function table_liste_propriete(){
        $proprietes = Propriete::all();

        return view('propriete.liste', compact('proprietes'));
    }

}
