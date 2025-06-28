<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


// redirige la route / vers  /contacts

Route::get('/', function () {
    return redirect('/contacts');
});

Route::resource('contacts', ContactController::class);




// page note found 
/**
 * IL FAUT TOUJOURS LE PLACER EN BAS DE LA LISTE DES ROUTES
 */
Route::fallback(function () {
    return view('errors.404');
});




