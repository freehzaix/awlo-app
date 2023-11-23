<?php

namespace App\Http\Controllers;

use App\Models\Cni;
use App\Models\Hote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HoteController extends Controller
{
    //Vue Login
    public function login(){
        return view('hote.login');
    }

    //Traitement Login
    public function login_post(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // dd($request->email);

        $hote = Hote::where('email', $request->email)->first();
        
        if($hote){
            $passwordHashed = $hote->password;
            if(Hash::check($request->password, $passwordHashed)){
                //Le mot de passe est correct, on créé la session
                $request->session()->put('hote', $hote);
                //On fait une redirection vers le dashboard
                return redirect()->route('hote.dashboard');
            }else{
                //Rediriger vers le login avec un message d'erreur
                return back()->with('erreurLogin', 'Les identifiants de connexion sont incorrect.'); 
            }
        }else{
            return back()->with('erreurLogin', 'L\'adresse email n\'existe pas dans la base de données.'); 
        }
        
    }

    //Vue Dashboard
    public function dashboard(Request $request){
        //Vérifiez si la session 'hote' existe avant d'afficher la vue Dashboard
        if($request->session()->get('hote')){
            return view('hote.dashboard');
        }else{
            return redirect()->route('hote.login');
        }
    }

    //Vue Logout
    public function logout(Request $request){
        //Supprimer la session 'hote' pour se déconnecter
        $request->session()->forget('hote');

        return redirect()->route('hote.login');
    }

    //Vue CNI
    public function cni(Request $request){
        $cnis = Cni::where('id', $request->session()->get('hote')->id)->get();
        
        return view('hote.cni', compact('cnis'));
    }

}
