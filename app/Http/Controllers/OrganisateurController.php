<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\organisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrganisateurController extends Controller
{

    public function OrganisateurInscription(){



        return view('organisateur.inscription');
    }

    public function OrganisateurAction(Request $request){


        $this->validate($request,[
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'email|unique:organisateurs,email',
            'contact'=>'required',
            'nom_organisateur'=>'required',
            'password'=>'required|min:8',
            // 'type_user_id'=>'required',
            'password_confirmation'=>'required|same:password',

        ]);
        $user = new organisateur();
        $user->nom = $request->nom;
        $user->nom_organisateur = $request->nom_organisateur;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->formule_id = 2;
        $user->password = Hash::make($request->password);
        $user->save();
        // dd($user);

        return redirect()->route('organisateur_login')->with('inscription','Votre compte a bien été créer connectez-vous svp!');
    }


    public function OrganisateurLogin(){

        return view('organisateur.login');
    }


    public function OrganisateurLoginAction(Request $request){

        $admin = "administrateur";

        $request->validate([
            'email'=>['required'],
            'password'=>'required',
        ]);







        if (Auth::guard('organisateur')->attempt(['email' =>$request->email, 'password'=>$request->password])) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('connexion','Vous être bien connecté');

        }
        return back()->with('id_erreur','Identifiant incorrecte !');


    }

    public function dashboard(){

        $organisateurs = Auth()->guard('organisateur')->user()->id;

        $events = Event::where('organisateur_id',$organisateurs)->OrderBy('id','desc')->get();

        return view('organisateur.all',compact('events'));
    }





    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('accueil');
    }


}
