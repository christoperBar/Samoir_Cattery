<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catndiptransaction;

class ControllerCatndiptransactions extends Controller
{
    function getAllcatndiptransactions(Request $request){

        if($request->has('search')){
            $alltransactions = Catndiptransaction::where('buyer', 'like', '%'.$request->search.'%')->orWhere('status', 'like', '%'.$request->search.'%')->paginate(10)->withQueryString();
        }
        else{
            $alltransactions = Catndiptransaction::orderBy('buyer', 'asc')->paginate(10);
        }



        return view('catndiptransactions', [
            'transactions' => $alltransactions,
            "pagetitle" => "Transactions",
            "urlpage" => "/catndiptransactions"
        ]);

    }

    function createtransaction(Request $request){
        $newtransaction = $request->validate([
            'buyer'=>'required',
            'buyer_contact'=>'required',
            'status'=>'required',
            'total'=>'required',
        ]);

        Catndiptransaction::create($newtransaction);
        return redirect('/catndiptransactions');
    }

    function deletetransaction(string $catndipid){
        $transaction = Catndiptransaction::find($catndipid);
        $transaction->delete();
        return redirect('/catndiptransactions');
    }

    function updatestatus(string $catndipid, Request $request){
        $updatedstatus = $request->validate([
            'status'=>'required',
        ]);

        $transaction = Catndiptransaction::find($catndipid);
        $transaction->status = $updatedstatus['status'];
        $transaction->save();

        return redirect('/catndiptransactions');
    }
}
