<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;
use App\Models\Rase;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ControllerCat extends Controller
{
    function createCat(Request $request){
        $newcat = $request->validate([
            'cat_name'=>'required',
            'color' => 'required',
            'can_adopt' => 'required',
            'ras_id' => 'required',
            'maturity' => 'required',
            'gender' => 'required',
            'birthday'=>'required',
            'cat_photo' =>'required|mimes:jpeg,jpg,png|max:1000',
        ]);

        $cat = Cat::create([
            'cat_name'=> $newcat['cat_name'],
            'color' => $newcat['color'],
            'can_adopt' => $newcat['can_adopt'],
            'ras_id' => $newcat['ras_id'],
            'maturity' => $newcat['maturity'],
            'gender' => $newcat['gender'],
            'birthday'=> $newcat['birthday'],
        ]);

        $gambar = $request->file('cat_photo');

        $path = '/storage/'. $gambar->storePublicly('cat_images/', 'public');

        $cat->cat_photo = $path;

        $cat->save();

        return redirect('/collection');
    }

    function createCatForm(){
        $rases = Rase::all()->sortBy('ras_name');
        return view('addcatform',[
            "rases" => $rases,
            "pagetitle" => "Add Cat",
            "urlpage" => "/addcatform"
        ]);
        
    }

    function deleteCat(string $catid){
        $cat = Cat::find($catid);
        $imagePath = str_replace("/storage/",'',$cat->cat_photo);
        Storage::disk('public')->delete($imagePath);
        $cat->delete();
        return redirect('/collection');
        
    }

    function updateCatForm(string $catid){
        $cat = Cat::find($catid);
        $rases = Rase::all()->sortBy('ras_name');
        return view('updatecatform',[
            "rases" => $rases,
            "cat" => $cat,
            "pagetitle" => "Update Cat",
            "urlpage" => "/updatecatform"
        ]);

    }

    function updateCat(string $catid, Request $request){
        $cat = Cat::find($catid);
        $updatedcat = $request->validate([
            'cat_name'=>'required',
            'color' => 'required',
            'can_adopt' => 'required',
            'ras_id' => 'required',
            'maturity' => 'required',
            'gender' => 'required',
            'birthday'=>'required',
            'cat_photo' =>'mimes:jpeg,jpg,png|max:25000',
            
        ]);
        $cat->cat_name = $updatedcat['cat_name'];
        $cat->color = $updatedcat['color'];
        $cat->can_adopt = $updatedcat['can_adopt'];
        $cat->ras_id = $updatedcat['ras_id'];
        $cat->maturity = $updatedcat['maturity'];
        $cat->gender = $updatedcat['gender'];
        $cat->birthday = $updatedcat['birthday'];

        if($request['cat_photo']){
            $gambar = $request->file('cat_photo');
            $path = '/storage/'. $gambar->storePublicly('cat_images/', 'public');
            $imagePath = str_replace("/storage/",'',$cat->cat_photo);
            $cat->cat_photo = $path;
            if($cat->save()){
                
                Storage::disk('public')->delete($imagePath);
            }
            return redirect('/collection');
        }
        $cat->save();
        return redirect('/collection');
        
        
    }
}
