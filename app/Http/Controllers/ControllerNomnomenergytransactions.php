<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nomnomenergytransaction;
class ControllerNomnomenergytransactions extends Controller
{
    function getAllnomnomtransactions(Request $request){
        if($request->has('search')){
            $alltransactions = Nomnomenergytransaction::where('buyer', 'like', '%'.$request->search.'%')->orWhere('status', 'like', '%'.$request->search.'%')->paginate(10)->withQueryString();
        }
        else{
            $alltransactions = Nomnomenergytransaction::orderBy('buyer', 'asc')->paginate(10);
        }

        return view('nomnomtransactions', [
            'transactions' => $alltransactions,
            "pagetitle" => "Transactions",
            "urlpage" => "/nomnomtransactions"
        ]);
    }

    function createtransaction(Request $request){
        $newtransaction = $request->validate([
            'buyer'=>'required',
            'buyer_contact'=>'required',
            'status'=>'required',
            'quantity' => 'required',
            'total'=>'required',
        ]);

        Nomnomenergytransaction::create($newtransaction);
        return redirect('/nomnomtransactions');
    }

    function updatestatus(string $catndipid, Request $request){
        $updatedstatus = $request->validate([
            'status'=>'required',
        ]);

        $transaction = Nomnomenergytransaction::find($catndipid);
        $transaction->status = $updatedstatus['status'];
        $transaction->save();

        return redirect('/nomnomtransactions');
    }

    function deletetransaction(string $catndipid){
        $transaction = Nomnomenergytransaction::find($catndipid);
        $transaction->delete();
        return redirect('/nomnomtransactions');
    }

    function createorder(Request $request){
        $newtransaction = $request->validate([
            'buyer'=>'required',
            'buyer_contact'=>'required',
            'quantity' => 'required',
        ]);

        $transaction = Nomnomenergytransaction::create([
            'buyer'=> $newtransaction['buyer'],
            'buyer_contact' => $newtransaction['buyer_contact'],
            'quantity' => $newtransaction['quantity'],
            'status' => 'pending',
            'total' => $newtransaction['quantity'] * 100000
        ]);


        $transaction->save();

        $buyer = $newtransaction['buyer'];
        $jumlah = $newtransaction['quantity'];
        
        $url = 'https://api.whatsapp.com/send?phone=6282244838463&text=Permisi%20kak%2C%20saya%20' . $buyer . '%20ingin%20memesan%20NomNomEnergy%20sebanyak%20' . $jumlah . 'pcs.';
        
        return redirect($url);
    }
    
}
