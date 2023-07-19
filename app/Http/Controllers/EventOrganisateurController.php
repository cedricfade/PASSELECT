<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\event;
use Illuminate\Http\Request;

class EventOrganisateurController extends Controller
{
    public function all(){

        $events = event::all()->sortDesc();
        $categories = categorie::all();


        return view('page.event', compact('events', 'categories'));
    }

    public function view($id){

        $event = event::findOrFail($id);


        return view('page.view', compact('event'));
    }
}
