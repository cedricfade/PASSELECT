<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EventController extends Controller
{

    // AFFICHER TOUS LES EVENEMENTS DE L'ORGANISATEUR

    public function all(){
        $organisateurs = Auth()->guard('organisateur')->user()->id;

        $events = Event::where('organisateur_id',$organisateurs)->OrderBy('id','desc')->get();


        return view('organisateur.event.all', compact('events','organisateurs'));
    }
        // AFFICHAGE INFO EVENEMENT SUR UNE PAGE

    public function view($id){
        $categories = categorie::all();

        $event = event::findOrFail($id);

        return view('organisateur.event.view', compact('event','categories'));
    }


    // MODIFIER UN EVENEMENT

    public function eventModif($id){

        $event = Event::findOrFail($id);


        // $event->update([
        //     'titre'
        // ])

         // $adhesions->update([
        //     'souscription'=>(isset($request->souscription)) ? 1 : 0
        //     // 'souscription'=>(isset($request->souscription))
        // ]);
        // $adhesions = new Adhesion();


    }


    public function ajout(){
        $categories = categorie::all();




        return view('organisateur.event.ajout', compact('categories'));
    }

    public function EventValidate(Request $request){
        $this->validate($request,[
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);



         //  //    Pour générer un nom d'un fichier et recuperer l'extention d'une image
         $filename = time().'.'. $request->image->extension();

         // Pour enregistré un fichier depuis request
        $path =  $request->file('image')->storeAs('photo_event',$filename,'public');
        $organisateur = Auth()->guard('organisateur')->user()->id;

        $events = new event();


        $events->organisateur_id  = $organisateur;
        // $adhesions->souscription = (isset($request->souscription));
        $events->categorie_id  = $request->categorie_id;
        $events->titre  = $request->titre;
        $events->description  = $request->description;
        $events->prix_vip  = $request->prix_vip;
        $events->prix_vvip  = $request->prix_vvip;
        $events->prix_public  = $request->prix_public;
        $events->date_event  = $request->date_event;
        $events->lieu_event  = $request->lieu_event;
        $events->heure_event  = $request->heure_event;
        $events->prix_vip  = $request->prix_vip;
        $events->image = $path;

        // dd($events);
        $events->save();

        return redirect()->route('event.all')->with('event','Evènement ajouté avec succès');



    }
}
