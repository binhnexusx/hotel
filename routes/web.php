<?php
use App\Http\Controllers\HandelController;
use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
     return view('welcome');
 });
 Route::post('/store', [HandelController::class, 'store']  );
Route::get('/show', [HandelController::class, 'shows']  );
