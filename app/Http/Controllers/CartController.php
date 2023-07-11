<?php

namespace App\Http\Controllers;
use Cart;
use App\Models\event;
use App\Models\ticket;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

//      public function cartAdd($id){
//         $product = event::findOrFail($id);

//         $cart = session()->get('cart');

//         $product_details = [

//             'name' => $product->name,
//             'price' => $product->price,
//             'quantity' => $product->quantity,
//             ];
//             $cart[$product->id] = $product_details;
//             session()->put("cart", $cart);

//             dd($product)
// ;

//      }
public function cartAdd(Request $request,$id){
    $product = event::findOrFail($id);
    $user = Auth()->guard('participant')->user();

    $ticket = new ticket();
    $ticket->participant_id = $user->id;
    $ticket->event_id = $product->id;
    $ticket->prix_vip = $request->nombre_vip;
    $ticket->prix_vvip = $request->nombre_vvip;
    $ticket->prix_public = $request->nombre_public;

    $ticket->save();

    return redirect()->back()->with('success','Ticket ajouté au panier');


}


public function checkout(){

    // $user = Auth()->guard('participant_id')->user()->id;
    // $ticket = ticket::findOrFail();

    // // $ticket = ticket::find($id);

    // $cart = Cart::where('ticket');

    // $ticket = ticket::where('event_id',$user);

    // foreach ($ticket as $key => $cartProduct) {
    //     $event = event::find($cartProduct->event_id);

    // }
    $participant = Auth()->guard('participant')->user()->id;

    $tickets = ticket::where('participant_id',$participant)->get();

    return view('participant.dashboard.checkout',compact('tickets'));




}


public function payment(Request $request){





    return view('participant.dashboard.payment');
}


    //  public function cartAdd($id){
    //     $te = 'quantite';


    //     $product = event::findOrFail($id);

    //     $cart = session()->get('cart',[]);

    //     if (isset($cart[$id])) {
    //         $cart[$id][$te];
    //     }
    //     else{
    //     $cart[$id] = [
    //    'id' => $product->id,
    //    'titre' => $product->titre,
    //    'prix_vp' => $product->prix_vp,
    //    'prix_vvp' => $product->prix_vvp,
    //    'prix_public' => $product->prix_public,
    //    'quantity'=>1,
    //    'price'=> $product->prix_public,

    //         ];
    //     }
    //     session()->put('cart',$cart);
    //     // dd($product);
    //     // return redirect()->back()->with('success','Ticket ajouté au panier');



    //  }

public function store(Request $request)
{

    $product = event::findOrFail($request->id);


    Cart::add([
        'id' => $product->id,
        'name' => $product->titre,
        'price'=> $product->prix_public,
        'attributes' => [],
        'quantity'=>1,
        'associatedModel' => $product,
      ]
    );
    // dd($product);
    return redirect()->back()->with('cart', 'ok');


}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
