<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Rase;
use Illuminate\Http\Request;

class ControllerRas extends Controller
{
    function showAllRases()
    {
        $allCats = Cat::all();
        $allRases = Rase::all();

        return view('collection', [
            'rases' => $allRases,
            'cats' => $allCats,
            "pagetitle" => "Collection",
            "urlpage" => "/collection"
        ]);
    }

    function getCatsWithID(int $id)
    {
        $allRases = Rase::all();
        $cat = Rase::find($id)->cats;

        return view('collectionwithid', [
            'rases' => $allRases,
            'cats' => $cat,
            "pagetitle" => "Collection",
            "urlpage" => "/collection",
            "active" => $id
        ]);
    }
}
