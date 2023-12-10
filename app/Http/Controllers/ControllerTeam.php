<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ControllerTeam extends Controller
{
    function showAllTeam()
    {
        $allTeams = Team::all();

        return view('about', [
            'teams' => $allTeams,
            "pagetitle" => "About Us",
            "urlpage" => "/about"
        ]);
    }

    function createTeam(Request $request){
        $newteam = $request->validate([
            'name'=>'required',
            'email' => 'required|email',
            'photo' => 'required|mimes:jpeg,jpg,png|max:1000',
            'description' => 'required',
            'instagram' => 'nullable',
            'tiktok'=>'nullable'
        ]);

        $team = Team::create([
            'name'=> $newteam['name'],
            'email' => $newteam['email'],
            'description' => $newteam['description'],
        ]);

        $gambar = $request->file('photo');

        $path = '/storage/'. $gambar->storePublicly('team_images/', 'public');

        $team->photo = $path;

        if($newteam['instagram']){
            $igpath = $newteam['instagram'];
            $team->instagram = $igpath;
        }
        if($newteam['tiktok']){
            $ttpath = $newteam['tiktok'];
            $team->tiktok = $ttpath;
        }

        $team->save();

        return redirect('/about');


    }

    function deleteTeam(string $teamid){
        $team = Team::find($teamid);
        $imagePath = str_replace("/storage/",'',$team->photo);
        Storage::disk('public')->delete($imagePath);
        $team->delete();
        return redirect('/about');
        
    }

    function updateTeamForm(string $teamid){
        $team = Team::find($teamid);
        return view('updateteamform',[
            "team" => $team,
            "pagetitle" => "Update Team",
            "urlpage" => "/updateteamform"
        ]);

    }

    function updateTeam(string $teamid, Request $request){
        $team = Team::find($teamid);
        $updatedteam = $request->validate([
            'name'=>'required',
            'email' => 'required|email',
            'photo' => 'mimes:jpeg,jpg,png|max:1000',
            'description' => 'required',
            'instagram' => 'nullable',
            'tiktok'=>'nullable'
            
        ]);

        $team->name = $updatedteam['name'];
        $team->email = $updatedteam['email'];
        $team->description = $updatedteam['description'];

        if($updatedteam['instagram']){
            $igpath = $updatedteam['instagram'];
            $team->instagram = $igpath;
        }
        if($updatedteam['tiktok']){
            $ttpath = $updatedteam['tiktok'];
            $team->tiktok = $ttpath;
        }

        if($request['photo']){
            $gambar = $request->file('photo');
            $path = '/storage/'. $gambar->storePublicly('team_images/', 'public');
            $imagePath = str_replace("/storage/",'',$team->photo);
            $team->photo = $path;
            if($team->save()){
                
                Storage::disk('public')->delete($imagePath);
            }
            return redirect('/about');
        }
        $team->save();
        
        return redirect('/about');
    }


}
