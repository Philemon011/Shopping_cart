<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


 Route::get('/', [ClientController::class, 'home']);
