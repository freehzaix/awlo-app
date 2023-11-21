<?php

namespace App\Http\Controllers;

use App\Models\Cni;
use App\Models\Hote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    //vue index
    public function index(){
        return view('pages.index');
    }

    //vue hote
    public function hote(){
        return view('pages.hote');
    }

    //vue about
    public function about(){
        return view('pages.about');
    }

    //vue blog
    public function blog(){
        return view('pages.blog');
    }

    //vue contact
    public function contact(){
        return view('pages.contact');
    }

    //vue service
    public function service(){
        return view('pages.service');
    }

    //vue step1
    public function step1(){
        return view('pages.step1');
    }

    //traitement formulaire step1
    public function step1_post(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:hotes',
        ]);

        $hote = new Hote();
        $hote->nom = $request->nom;
        $hote->prenom = $request->prenom;
        $hote->telephone = $request->telephone;
        $hote->email = $request->email;
        $hote->save();

        $request->session()->put('hote', $hote);

        return redirect()->route('pages.step2');

    }

    //vue step2
    public function step2(Request $request){
        if(!$request->session()->get('hote')){
            return redirect()->route('pages.step1');
        }

        return view('pages.step2');
    }

    //traitement formulaire step2
    public function step2_post(Request $request){
        $request->validate([
            'password' => 'required|min:5',
            'password2' => 'required|min:5',
            'localisation' => 'required',
            'image_profil' => 'required|file|mimes:jpg,bmp,png',
        ]);

        if($request->password == $request->password2){
            $hote = Hote::find($request->session()->get('hote')->id);
            $hote->password = Hash::make($request->password);
            $hote->localisation = $request->localisation;

            $ancienFichier = $request->session()->get('hote')->image_profil;
            //On va remplacer le repertoire "storage" par "public" concernant
            //l'ancien fichier image de profil
            $ancienFichier = str_replace('storage/', 'public/', $ancienFichier);
            
            if ($ancienFichier && Storage::exists($ancienFichier)) {
                Storage::delete($ancienFichier);
            }

            //Stocké l'image dans la variable $path dans
            //le répertoire /storage/public/images
            //et créer un lien du repertoire storage vers public
            $path = $request->file('image_profil')->store('public/images');
            //Rétirer le repertoire public avant de mettre dans la base de données
            $replace_path = str_replace('public', '', $path);
            //ajouter le repertoire "storage" pour l'insertion de la base de données
            $hote->image_profil = "storage". $replace_path; 

            $hote->update();

            $request->session()->put('hote', $hote);

            return redirect()->route('pages.step3');

        }else{
            return redirect()->route('pages.step2')->with('erreurPassword', 'Votre mot de passe n\'est pas conforme.');
        }

    }

    //vue step3
    public function step3(Request $request){
        if(!$request->session()->get('hote')){
            return redirect()->route('pages.step1');
        }

        return view('pages.step3');
    }

    //traitement formulaire step3
    public function step3_post(Request $request){
        
        $request->validate([
            'cni_recto' => 'required|file|mimes:jpg,bmp,png',
            'cni_verso' => 'required|file|mimes:jpg,bmp,png',
        ]);

        //Stocké l'image dans la variable $path dans
        //le répertoire /storage/public/images
        //et créer un lien du repertoire storage vers public
        $path1 = $request->file('cni_recto')->store('public/images');
        $path2 = $request->file('cni_verso')->store('public/images');
        //Rétirer le repertoire public avant de mettre dans la base de données
        $replace_path1 = str_replace('public', '', $path1);
        $replace_path2 = str_replace('public', '', $path2);
        //ajouter le repertoire "storage" pour l'insertion de la base de données

        $cni = new Cni();
        $cni->cni_recto = "storage". $replace_path1; 
        $cni->cni_verso = "storage". $replace_path2;
        $cni->hote_id = $request->session()->get('hote')->id;
        $cni->save();

        $request->session()->forget('hote');

        return redirect()->route('pages.step1')->with('status', 'Votre inscription a bien été enregistré.');

    }

}