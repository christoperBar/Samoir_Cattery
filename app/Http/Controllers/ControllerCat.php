<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;
use App\Models\Rase;
use App\Models\Cattransaction;
use App\Models\Catimage;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class ControllerCat extends Controller
{
    function createCat(Request $request){
        $newcat = $request->validate([
            'cat_name'=>'required',
            'color' => 'required',
            'is_adoptable' => 'required',
            'ras_id' => 'required',
            'maturity' => 'required',
            'gender' => 'required',
            'birthday'=>'required',
            'images.*' =>'required|mimes:jpeg,jpg,png|max:1000',
        ]);

        
        $cat = Cat::create([
            'cat_name'=> $newcat['cat_name'],
            'color' => $newcat['color'],
            'is_adoptable' => $newcat['is_adoptable'] == "1",
            'ras_id' => $newcat['ras_id'],
            'maturity' => $newcat['maturity'],
            'gender' => $newcat['gender'],
            'birthday'=> $newcat['birthday'],
        ]);

        if($request->hasfile('images')) {
            foreach($request->file('images') as $file)
            {
                $path = '/storage/'. $file->storePublicly('cat_images/'.$cat->id, 'public');
                $cat->catimages()->create([
                    'cat_photo' => $path,
                    'cat_id' => $cat->id
                ]);
            }
        }

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
        $catimages = Catimage::where('cat_id', $catid)->get();
        return view('updatecatform',[
            "rases" => $rases,
            "cat" => $cat,
            "catimages" => $catimages,
            "pagetitle" => "Update Cat",
            "urlpage" => "/updatecatform"
        ]);

    }

    function updateCat(string $catid, Request $request){
        $cat = Cat::find($catid);
        $updatedcat = $request->validate([
            'cat_name'=>'required',
            'color' => 'required',
            'is_adoptable' => 'required',
            'ras_id' => 'required',
            'maturity' => 'required',
            'gender' => 'required',
            'birthday'=>'required',
            
        ]);
        $cat->cat_name = $updatedcat['cat_name'];
        $cat->color = $updatedcat['color'];
        $cat->is_adoptable = $updatedcat['is_adoptable']=="1";
        $cat->ras_id = $updatedcat['ras_id'];
        $cat->maturity = $updatedcat['maturity'];
        $cat->gender = $updatedcat['gender'];
        $cat->birthday = $updatedcat['birthday'];

        // if($request['cat_photo']){
        //     $gambar = $request->file('cat_photo');
        //     $path = '/storage/'. $gambar->storePublicly('cat_images/', 'public');
        //     $imagePath = str_replace("/storage/",'',$cat->cat_photo);
        //     $cat->cat_photo = $path;
        //     if($cat->save()){
                
        //         Storage::disk('public')->delete($imagePath);
        //     }
        //     return redirect('/collection');
        // }
        // $cat->save();
        // return redirect('/collection');

        if($request->hasfile('images')) {
            $request->validate([
                'images.*' =>'required|mimes:jpeg,jpg,png|max:1000',
            ]);
            $delete_catimg = Catimage::where('cat_id', $cat->id)->get();
                foreach ($delete_catimg as $index => $catimg ) {
                    $deletedImagePath = str_replace("/storage/",'',$catimg->cat_photo);
                    Storage::disk('public')->delete($deletedImagePath);
                    $catimg->delete();
                }
            foreach($request->file('images') as $file)
            {
                $path = '/storage/'. $file->storePublicly('cat_images/'.$cat->id, 'public');
                $cat->catimages()->create([
                    'cat_photo' => $path,
                    'cat_id' => $cat->id
                ]);
            }
        }
        $cat->save();
        return redirect('/collection');
    }

    function adoptCatWithID(){
        $cats = Cat::where('is_adoptable', true)->where('is_available', true)->get()->sortBy('cat_name');
        
        return view('addadopttransaction',
    [
        "cats" => $cats,
        "pagetitle" => "Add Adopt Transactions",
        "urlpage" => "/addadopttransaction"
    ]);
    }

    function createAdoptTransaction(Request $request){
        $newtransaction = $request->validate([
            'adopter'=>'required',
            'adopter_contact'=>'required',
            'cat_id'=>'required',
            'status'=>'required',
            'total'=>'required',
        ]);

        if($newtransaction['status'] == "success"){
            $cat = Cat::find($newtransaction['cat_id']);
            $cat->is_available = false;
            $cat->save();
        };
        Cattransaction::create($newtransaction);
        return redirect('/adopttransactions');
    }

    function showAlladopttransactions(Request $request){
        if($request->has('search')){
            $alltransactions = Cattransaction::where('adopter', 'like', '%'.$request->search.'%')->orWhere('status', 'like', '%'.$request->search.'%')->paginate(10)->withQueryString();
        }
        else{
            $alltransactions = Cattransaction::orderBy('adopter', 'asc')->paginate(10);
        }

        return view('adopttransactions', [
            'transactions' => $alltransactions,
            "pagetitle" => "Transactions",
            "urlpage" => "/adopttransactions"
        ]);
    }

    function updatestatus(string $transactionid, Request $request){
        $updatedstatus = $request->validate([
            'status'=>'required',
        ]);

        $transaction = Cattransaction::find($transactionid);
        if($updatedstatus['status'] == "success"){
            $cat = Cat::find($transaction['cat_id']);
            $cat->is_available = false;
            $cat->save();
        }
        else{
            $cat = Cat::find($transaction['cat_id']);
            $cat->is_available = true;
            $cat->save();
        }
        $transaction->status = $updatedstatus['status'];
        $transaction->save();

        return redirect('/adopttransactions');
    }

    function deletetransaction(string $transactionid){
        $transaction = Cattransaction::find($transactionid);
        $transaction->delete();
        return redirect('/adopttransactions');
    }

    function showcatdetails(string $catid){
        $cat = Cat::find($catid);
        $catimages = Catimage::where('cat_id', $catid)->get();

        return view('catdetails',
        [
        "cat" => $cat,
        "catimages" => $catimages,
        "pagetitle" => "Cat Details",
        "urlpage" => "/catdetails"
        ]);
    }

    function addmoreimages(string $catid, Request $request){
        $newimages = $request->validate([
            'images.*' =>'required|mimes:jpeg,jpg,png|max:1000',
        ]);
        $cat = Cat::find($catid);

        foreach($request->file('images') as $file)
        {
            $path = '/storage/'. $file->storePublicly('cat_images/'.$cat->id, 'public');
            $cat->catimages()->create([
                'cat_photo' => $path,
                'cat_id' => $cat->id
            ]);
        }
        return back();


    }
}
