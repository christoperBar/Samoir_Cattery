<?php

use App\Http\Controllers\ControllerRas;
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

Route::get('/', function () {
    return view('home',
    [
        "pagetitle" => "Home",
        "urlpage" => "/"
    ]
);
});
Route::get('/about', function () {
    return view('about',
    [
        "pagetitle" => "About Us",
        "urlpage" => "/about"
    ]
);
});
Route::get('/why', function () {
    return view('why',
    [
        "pagetitle" => "Why Samoir?",
        "urlpage" => "/why"
    ]
);
});

Route::get('/collection',[ControllerRas::class,'showAllRases']);
Route::get('/collection/{rase}',[ControllerRas::class,'getCatsWithID']);

