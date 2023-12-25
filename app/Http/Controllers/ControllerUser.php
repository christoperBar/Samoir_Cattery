<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ControllerUser extends Controller
{
    function updateuserform(){
        $user = User::first();
        return view('settings',
        [
            "user" => $user,
            "pagetitle" => "Settings",
            "urlpage" => "/settings"
        ]);
    }
    function updateuser(Request $request){
        $user = User::first();

        $validationRules = [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'contact' => 'required',
        ];

        if ($request->newpassword) {
            $validationRules['newpassword'] = 'required_with:newpassword_confirmation|min:8|confirmed';
        }

        $validatedData = $request->validate($validationRules, [
            'newpassword.confirmed' => 'Konfirmasi password tidak sesuai.',
        ]);

        if (Hash::check($request->password, $user->password)) {
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->contact = $validatedData['contact'];

            if ($request->newpassword) {
                $user->password = Hash::make($validatedData['newpassword']);
            }

            $user->save();

            return redirect("/");
        } else {
            return back()->withErrors(['password' => 'Password yang dimasukkan salah.']);
        }
    }
}
