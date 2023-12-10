<?php

use App\Http\Controllers\ControllerRas;
use App\Http\Controllers\ControllerTeam;
use App\Http\Controllers\ControllerCat;
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
    return view(
        'home',
        [
            "pagetitle" => "Home",
            "urlpage" => "/"
        ]
    );
});

Route::get('/about', [ControllerTeam::class, 'showAllTeam']);

Route::get('/why', function () {
    return view(
        'why',
        [
            "pagetitle" => "Why Samoir?",
            "urlpage" => "/why"
        ]
    );
});

Route::get('/privacy', function () {
    return view(
        'privacy',
        [
            "pagetitle" => "Privacy Policy",
            "urlpage" => "/privacy"
        ]
    );
});

Route::get('/terms', function () {
    return view(
        'terms',
        [
            "pagetitle" => "Terms & Conditions",
            "urlpage" => "/terms"
        ]
    );
});

Route::get('/catndip', function () {
    return view(
        'catndip',
        [
            "pagetitle" => "CatnDip",
            "urlpage" => "/catndip"
        ]
    );
});

Route::get('/nomnomenergy', function () {
    return view(
        'nomnomenergy',
        [
            "pagetitle" => "NomNomEnergy",
            "urlpage" => "/nomnomenergy"
        ]
    );
});

Route::get('/collection', [ControllerRas::class, 'showAllRases']);
Route::get('/collection/{rase}', [ControllerRas::class, 'getCatsWithID']);

Route::get('/adopt', [ControllerRas::class, 'showAllRasesCanAdopt']);
Route::get('/adopt/{rase}', [ControllerRas::class, 'getCatsWithIDCanAdopt']);


Route::get('/addcatform', [ControllerCat::class, 'createCatForm']);
Route::post('/addcat', [ControllerCat::class, 'createCat']);
Route::delete('/deletecat/{catid}', [ControllerCat::class, 'deleteCat']);
Route::get('/updatecatform/{catid}', [ControllerCat::class, 'updateCatForm']);
Route::put('/updatecat/{catid}', [ControllerCat::class, 'updateCat']);


Route::get('/addteamform',function(){
    return view('addteamform',
    [
        "pagetitle" => "Add Teams",
        "urlpage" => "/addteamform"
    ]
);
});
Route::post('/addteam', [ControllerTeam::class, 'createTeam']);
Route::delete('/deleteteam/{teamid}', [ControllerTeam::class, 'deleteTeam']);
Route::get('/updateteamform/{teamid}', [ControllerTeam::class, 'updateTeamForm']);
Route::put('/updateteam/{teamid}', [ControllerTeam::class, 'updateTeam']);