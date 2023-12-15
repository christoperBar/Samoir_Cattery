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
}
