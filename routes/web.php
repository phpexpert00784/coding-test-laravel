<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//default redirect to listing page
Route::get('/', function () {
    return redirect('/listing');
});
    
//customer listing page with order and its items
Route::get('/listing', [UserController::class, 'index'])
    ->name('listing.index');
    
