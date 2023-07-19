<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\event;
use Illuminate\Http\Request;

use Illuminate\Pagination\Paginator;


class AccueilController extends Controller
{
    public function all(){
        $events = event::all()->sortDesc();
        $categories = categorie::all();

        return view('page.accueil',compact('events', 'categories'));
    }

    public function aide(){

        return view('page.aide');
    }




}
