<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventOrganisateurController;
use App\Http\Controllers\OrganisateurController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\PremiumController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('accueil');


Route::get('/',[AccueilController::class,'all'])->name('accueil');
Route::get('/aide',[AccueilController::class,'aide'])->name('aide');

// ORGANISATEUR
Route::get('/organisateur/inscription',[OrganisateurController::class,'OrganisateurInscription'])->name('organisateur_inscription');
Route::post('/organisateur/new',[OrganisateurController::class,'OrganisateurAction'])->name('organisateur_new');

// Connexion
Route::get('/organisateur/connexion',[OrganisateurController::class,'OrganisateurLogin'])->name('organisateur_login');
Route::post('/organisateur/validate',[OrganisateurController::class,'OrganisateurLoginAction'])->name('organisateur_login_action');
// deconnexion
Route::get('/logout',[OrganisateurController::class,'logout'])->name('logout');
Route::get('/dashboard',[OrganisateurController::class,'dashboard'])->name('dashboard');



 // EVENT
    Route::get('/event',[EventController::class,'all'])->name('event.all');
    Route::get('/event/{id}',[EventController::class,'view'])->name('event.view');
    Route::get('ajout',[EventController::class,'ajout'])->name('event.ajout');
    Route::post('modif',[EventController::class,'eventModif'])->name('event.modif');
    Route::post('/event/validate',[EventController::class,'EventValidate'])->name('event.validate');

    // PREMIUM
    Route::get('/premium',[PremiumController::class,'all'])->name('premium.all');


   //  EVENT ORGANISATEUR

   Route::get('/evenements',[EventOrganisateurController::class,'all'])->name('event-organisateur');
   Route::get('/evenements/{id}/{titre}',[EventOrganisateurController::class,'view'])->name('event-organisateur-view');

   // PARTICIPANT

   Route::get('/participant/inscription',[ParticipantController::class,'participantInscription'])->name('participant-inscription');
   Route::post('/participant/new',[ParticipantController::class,'participantAction'])->name('participant-new');
   Route::get('/tableau-de-bord',[ParticipantController::class,'dashboard'])->name('participant-dashboard');
   Route::get('/panier',[ParticipantController::class,'panier'])->name('participant-panier');
   Route::get('/panier/{id}',[ParticipantController::class,'delete'])->name('panier-delete');


   Route::get('/participant/login',[ParticipantController::class,'participantLogin'])->name('participant-login');
   Route::post('/participant/validate',[ParticipantController::class,'participantLoginAction'])->name('participant-login_action');
   Route::get('/logout',[ParticipantController::class,'logout'])->name('logout');


   // CART
   Route::POST('/cart/{id}', [CartController::class, 'cartAdd'])->name('cart.add');
   Route::get('/checkout',[CartController::class,'checkout'])->name('checkout');
   Route::post('/payment',[CartController::class,'payment'])->name('payment');
   // Route::get('/pannier/show', [CartController::class, 'cartAdd'])->name('cart.add');
   // Route::POST('/cart', [CartController::class, 'store'])->name('pannier.store');
