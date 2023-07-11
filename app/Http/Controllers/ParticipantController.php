<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\event;
use App\Models\participant;
use App\Models\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ParticipantController extends Controller
{

    public function participantInscription(){


        return view('participant.inscription');




    }


    public function participantAction(Request $request){

        $this->validate($request,[
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'email|unique:participants,email',
            'contact'=>'required',
            'password'=>'required|min:8',
            // 'type_user_id'=>'required',
            'password_confirmation'=>'required|same:password',

        ]);


        $participant = new participant();
        $participant->nom = $request->nom;
        $participant->prenom = $request->prenom;
        $participant->email = $request->email;
        $participant->contact = $request->contact;
        $participant->password = Hash::make($request->password);

        $participant->save();

        return redirect()->route('participant-login')->with('inscription','Votre compte à bien été crée');




    }


    public function participantLogin(){

        return view('participant.login');
    }



    public function participantLoginAction(Request $request){

        $admin = "administrateur";

        $request->validate([
            'email'=>['required'],
            'password'=>'required',
        ]);







        if (Auth::guard('participant')->attempt(['email' =>$request->email, 'password'=>$request->password])) {
            $request->session()->regenerate();
            return redirect()->route('accueil')->with('connexion','Vous être bien connecté');

        }
        return back()->with('id_erreur','Identifiant incorrecte !');


    }




    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('accueil');
    }



    // DASHBOARD PARTICIPANT

    public function dashboard(){


        return view('participant.dashboard.index');

    }
    public function panier(){
        $participant = Auth()->guard('participant')->user()->id;

        $tickets = ticket::where('participant_id',$participant)->get();


        return view('participant.dashboard.panier', compact('tickets'));

    }


    public function delete($id){

        $panier = ticket::findOrFail($id);

        $panier->delete($id);

        return back()->with('delete_panier','Ticket retiré avec succès');




    }



}
