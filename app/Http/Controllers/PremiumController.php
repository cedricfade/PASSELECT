<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremiumController extends Controller
{
    //

    public function all(){

        return view('organisateur.premium.all');
    }
}
