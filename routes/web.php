<?php

use App\Models\savon_listings;
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
        'heading' => 'Savon Classified Listing',
       // 'Ads' => ads::all();
         'classifieds'=> savon_listings::all()
        
    ]);
});

//single classified listing 
Route::get('/ads/{id}', function ($id) {
    return view('ad', [
        'heading' => 'Savon Classified Listing',
        'ad' => savon_listings::find($id)    ]);
});