<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return inertia('Index/index');
//});


Route::get('/', [IndexController::class, 'index']);
Route::get('/hello', [IndexController::class, 'show']);
Route::get('/login', [IndexController::class, 'login'])->name('login');
Route::get('/items',[ItemController::class, 'index']);



Route::get('/listing', [ListingController::class, 'index'])->name('listing.index');
Route::get('listing/create', [ListingController::class, 'create']);
Route::post('/listing', [ListingController::class, 'store']);
Route::get('listing/{listing}/edit', [ListingController::class, 'edit']);
Route::put('listing/{listing}', [ListingController::class, 'update']);
Route::delete('listing/{listing}', [ListingController::class, 'destroy']);
