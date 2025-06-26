<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


// redirige la route / vers  /contacts

Route::get('/', function () {
    return redirect('/contacts');
});

Route::resource('contacts', ContactController::class);





