<?php
use App\Http\Controllers\Auth\LoginController;
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
Route::get('/addcatform', [ControllerCat::class, 'createCatForm'])->middleware('auth');
Route::post('/addcat', [ControllerCat::class, 'createCat'])->middleware('auth');
Route::delete('/deletecat/{catid}', [ControllerCat::class, 'deleteCat'])->middleware('auth');
Route::get('/updatecatform/{catid}', [ControllerCat::class, 'updateCatForm'])->middleware('auth');
Route::put('/updatecat/{catid}', [ControllerCat::class, 'updateCat'])->middleware('auth');

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
})->middleware('auth');
Route::post('/addteam', [ControllerTeam::class, 'createTeam'])->middleware('auth');
Route::delete('/deleteteam/{teamid}', [ControllerTeam::class, 'deleteTeam'])->middleware('auth');
Route::get('/updateteamform/{teamid}', [ControllerTeam::class, 'updateTeamForm'])->middleware('auth');
Route::put('/updateteam/{teamid}', [ControllerTeam::class, 'updateTeam'])->middleware('auth');

//cerfitications_aboutus
Route::get('/addcertificationform',function(){
    return view('addcertificationform',
    [
        "pagetitle" => "Add Certification",
        "urlpage" => "/addcertificationform"
    ]
);
})->middleware('auth');
Route::post('/addcertificate', [ControllerCertification::class, 'createCertification'])->middleware('auth');
Route::delete('/deletecertificate/{certificateid}', [ControllerCertification::class, 'deleteCertification'])->middleware('auth');
Route::get('/updatecertificateform/{certificateid}', [ControllerCertification::class, 'updateCertificateForm'])->middleware('auth');
Route::put('/updatecertificate/{certificateid}', [ControllerCertification::class, 'updateCertification'])->middleware('auth');

//ras
Route::get('/addrasform',function(){
    return view('addrasform',
    [
        "pagetitle" => "Add Ras",
        "urlpage" => "/addrasform"
    ]
);
})->middleware('auth');
Route::post('/addras', [ControllerRas::class, 'createRas'])->middleware('auth');

//CRUD catndip transaction
Route::get('/catndiptransactions', [ControllerCatndiptransactions::class, 'getAllcatndiptransactions'])->middleware('auth');
Route::get('/addcatndiptransactionsform',function(){
    return view('addcatndiptransactions',
    [
        "pagetitle" => "Add Transactions",
        "urlpage" => "/addcatndiptransactionsform"
    ]
);
})->middleware('auth');
Route::post('/addcatndiptransaction', [ControllerCatndiptransactions::class, 'createtransaction'])->middleware('auth');
Route::put('/changecatndipstatus{catndipid}', [ControllerCatndiptransactions::class, 'updatestatus'])->middleware('auth');
Route::delete('/deletecatndiptransaction/{catndipid}',[ControllerCatndiptransactions::class, 'deletetransaction'])->middleware('auth');

//CRUD nomnom transaction
Route::get('/nomnomtransactions', [ControllerNomnomenergytransactions::class, 'getAllnomnomtransactions'])->middleware('auth');
Route::get('/addnomnomtransactionsform',function(){
    return view('addnomnomtransactions',
    [
        "pagetitle" => "Add Transactions",
        "urlpage" => "/addnomnomtransactionsform"
    ]
);
})->middleware('auth');
Route::get('/ordernomnom',function(){
    return view('ordernomnom',
    [
        "pagetitle" => "Order",
        "urlpage" => "/ordernomnom"
    ]
);
});
Route::post('/ordernomnomtransaction', [ControllerNomnomenergytransactions::class, 'createorder']);
Route::post('/addnomnomtransaction', [ControllerNomnomenergytransactions::class, 'createtransaction'])->middleware('auth');
Route::put('/changenomnompstatus{nomnomid}', [ControllerNomnomenergytransactions::class, 'updatestatus'])->middleware('auth');
Route::delete('/deletenomnomtransaction/{nomnomid}',[ControllerNomnomenergytransactions::class, 'deletetransaction'])->middleware('auth');

//CRUD events
Route::get('/event', [ControllerEvent::class, 'showAllEvent']);
Route::get('/addevent',function(){
    return view('addevent',
    [
        "pagetitle" => "Add Events",
        "urlpage" => "/addevent"
    ]
);
})->middleware('auth');
Route::post('/addevent', [ControllerEvent::class, 'createevent'])->middleware('auth');
Route::get('/updateeventform/{eventid}', [ControllerEvent::class, 'updateEventForm'])->middleware('auth');
Route::put('/updateevent/{eventid}', [ControllerEvent::class, 'updateEvent'])->middleware('auth');
Route::delete('/deleteevent/{eventid}', [ControllerEvent::class, 'deleteEvent'])->middleware('auth');

//CRUD Adopt Transactions
Route::get('/adopttransactions', [ControllerCat::class, 'showAlladopttransactions'])->middleware('auth');
Route::get('/addadopttransaction', [ControllerCat::class, 'adoptCatWithID'])->middleware('auth');
Route::post('/addadopttransaction', [ControllerCat::class, 'createAdoptTransaction'])->middleware('auth');
Route::put('/changecatstatus{transactionid}', [ControllerCat::class, 'updatestatus'])->middleware('auth');
Route::delete('/deletecattransaction/{transactionid}',[ControllerCat::class, 'deletetransaction'])->middleware('auth');

//CRUD Cat details
Route::get('/catdetails/{catid}', [ControllerCat::class, 'showcatdetails']);
Route::post('/addcatimages/{catid}',[ControllerCat::class, 'addmoreimages'] )->middleware('auth');

//Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
