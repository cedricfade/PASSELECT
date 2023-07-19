<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\event;
use App\Models\organisateur;
use App\Models\participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        $user = event::all();

        return response()->json($user);
    }


    public function show(event $user){


        return response()->json($user);
    }

    public function participantAction(Request $request){

        $this->validate($request,[
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'email|unique:participants',
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

    return  response()->json($participant);




    }
}
