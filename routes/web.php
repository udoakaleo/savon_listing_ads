<?php

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
// getting all ads 
Route::get('/', function () {
    return view('ads', [
        'heading' => 'Savon Classified Ads',
       // 'Ads' => ads::all();
    ]);
});

Route::get('/first', function () {
    return view('ads', [
        'heading' => 'Savon Ads'    ]);
});