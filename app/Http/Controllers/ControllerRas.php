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

    function showAllRasesCanAdopt()
    {
        $allCats = Cat::where('can_adopt' , 'yes')->get()->sortBy('cat_name');
        $allRases = Rase::all()->sortBy('ras_name');

        return view('adopt', [
            'rases' => $allRases,
            'cats' => $allCats,
            "pagetitle" => "Adopt",
            "urlpage" => "/adopt"
        ]);
    }

    function getCatsWithIDCanAdopt(int $id)
    {
        $allRases = Rase::all()->sortBy('ras_name');
        $rase = Rase::find($id);
        $cat = $rase->cats()->where('can_adopt', 'yes')->get()->sortBy('cat_name');

        return view('adoptwithid', [
            'rases' => $allRases,
            'cats' => $cat,
            "pagetitle" => "Adopt",
            "urlpage" => "/adopt",
            "active" => $id
        ]);
    }
}
