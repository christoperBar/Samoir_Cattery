<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Rase;
use Illuminate\Http\Request;

class ControllerRas extends Controller
{
    function showAllRases()
    {
        $allCats = Cat::all()->sortBy('cat_name');
        $allRases = Rase::all()->sortBy('ras_name');

        return view('collection', [
            'rases' => $allRases,
            'cats' => $allCats,
            "pagetitle" => "Collection",
            "urlpage" => "/collection"
        ]);
    }

    function getCatsWithID(int $id)
    {
        $allRases = Rase::all()->sortBy('ras_name');
        $cat = Rase::find($id)->cats->sortBy('cat_name');

        return view('collectionwithid', [
            'rases' => $allRases,
            'cats' => $cat,
            "pagetitle" => "Collection",
            "urlpage" => "/collection",
            "active" => $id
        ]);
    }
}
