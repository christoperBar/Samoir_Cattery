<?php

use App\Http\Controllers\ControllerCertification;
use App\Http\Controllers\ControllerEvent;
use App\Http\Controllers\ControllerRas;
use App\Http\Controllers\ControllerTeam;
use App\Http\Controllers\ControllerCat;
use App\Http\Controllers\ControllerCatndiptransactions;
use App\Http\Controllers\ControllerNomnomenergytransactions;
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

// home
Route::get('/', function () {
    return view(
        'home',
        [
            "pagetitle" => "Home",
            "urlpage" => "/"
        ]
    );
});
//about
Route::get('/about', [ControllerTeam::class, 'showAllTeam']);
//why samoir
Route::get('/why', function () {
    return view(
        'why',
        [
            "pagetitle" => "Why Samoir?",
            "urlpage" => "/why"
        ]
    );
});
//privacy policy
Route::get('/privacy', function () {
    return view(
        'privacy',
        [
            "pagetitle" => "Privacy Policy",
            "urlpage" => "/privacy"
        ]
    );
});
//terms and conditions
Route::get('/terms', function () {
    return view(
        'terms',
        [
            "pagetitle" => "Terms & Conditions",
            "urlpage" => "/terms"
        ]
    );
});
//catndip
Route::get('/catndip', function () {
    return view(
        'catndip',
        [
            "pagetitle" => "CatnDip",
            "urlpage" => "/catndip"
        ]
    );
});
//nomnomenergy
Route::get('/nomnomenergy', function () {
    return view(
        'nomnomenergy',
        [
            "pagetitle" => "NomNomEnergy",
            "urlpage" => "/nomnomenergy"
        ]
    );
});

//collection
Route::get('/collection', [ControllerRas::class, 'showAllRases']);
Route::get('/collection/{rase}', [ControllerRas::class, 'getCatsWithID']);
Route::get('/addcatform', [ControllerCat::class, 'createCatForm']);
Route::post('/addcat', [ControllerCat::class, 'createCat']);
Route::delete('/deletecat/{catid}', [ControllerCat::class, 'deleteCat']);
Route::get('/updatecatform/{catid}', [ControllerCat::class, 'updateCatForm']);
Route::put('/updatecat/{catid}', [ControllerCat::class, 'updateCat']);

//adopt
Route::get('/adopt', [ControllerRas::class, 'showAllRasesCanAdopt']);
Route::get('/adopt/{rase}', [ControllerRas::class, 'getCatsWithIDCanAdopt']);

//team_aboutus
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

//cerfitications_aboutus
Route::get('/addcertificationform',function(){
    return view('addcertificationform',
    [
        "pagetitle" => "Add Certification",
        "urlpage" => "/addcertificationform"
    ]
);
});
Route::post('/addcertificate', [ControllerCertification::class, 'createCertification']);
Route::delete('/deletecertificate/{certificateid}', [ControllerCertification::class, 'deleteCertification']);
Route::get('/updatecertificateform/{certificateid}', [ControllerCertification::class, 'updateCertificateForm']);
Route::put('/updatecertificate/{certificateid}', [ControllerCertification::class, 'updateCertification']);

//ras
Route::get('/addrasform',function(){
    return view('addrasform',
    [
        "pagetitle" => "Add Ras",
        "urlpage" => "/addrasform"
    ]
);
});
Route::post('/addras', [ControllerRas::class, 'createRas']);

//CRUD catndip transaction
Route::get('/catndiptransactions', [ControllerCatndiptransactions::class, 'getAllcatndiptransactions']);
Route::get('/addcatndiptransactionsform',function(){
    return view('addcatndiptransactions',
    [
        "pagetitle" => "Add Transactions",
        "urlpage" => "/addcatndiptransactionsform"
    ]
);
});
Route::post('/addcatndiptransaction', [ControllerCatndiptransactions::class, 'createtransaction']);
Route::put('/changecatndipstatus{catndipid}', [ControllerCatndiptransactions::class, 'updatestatus']);
Route::delete('/deletecatndiptransaction/{catndipid}',[ControllerCatndiptransactions::class, 'deletetransaction']);


//CRUD nomnom transaction
Route::get('/nomnomtransactions', [ControllerNomnomenergytransactions::class, 'getAllnomnomtransactions']);
Route::get('/addnomnomtransactionsform',function(){
    return view('addnomnomtransactions',
    [
        "pagetitle" => "Add Transactions",
        "urlpage" => "/addnomnomtransactionsform"
    ]
);
});
Route::post('/addnomnomtransaction', [ControllerNomnomenergytransactions::class, 'createtransaction']);
Route::put('/changenomnompstatus{nomnomid}', [ControllerNomnomenergytransactions::class, 'updatestatus']);
Route::delete('/deletenomnomtransaction/{catndipid}',[ControllerNomnomenergytransactions::class, 'deletetransaction']);

//CRUD events
Route::get('/event', [ControllerEvent::class, 'showAllEvent']);
Route::get('/addevent',function(){
    return view('addevent',
    [
        "pagetitle" => "Add Events",
        "urlpage" => "/addevent"
    ]
);
});
Route::post('/addevent', [ControllerEvent::class, 'createevent']);

