<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ControllerEvent extends Controller
{

    function showAllEvent(Request $request){
        if($request->has('search')){
            $allEvent = Event::where('event_name', 'like', '%'.$request->search.'%')->orWhere('status', 'like', '%'.$request->search.'%')->orWhere('location', 'like', '%'.$request->search.'%')->get();
        }
        else{
            $allEvent = Event::all();
        }
        

        return view('event', [
            'events' => $allEvent,
            "pagetitle" => "Events",
            "urlpage" => "/event"
        ]);
    }
    
    function createevent(Request $request){
        $newevent = $request->validate([
            'event_name'=>'required',
            'time' => 'required',
            'location' => 'required',
            'descriptions' => 'required',
            'status' => 'required',
            'event_photo' =>'required|mimes:jpeg,jpg,png|max:1000',
        ]);

        $tanggal = $newevent['time'];

        $carbon = Carbon::createFromFormat('m/d/Y', $tanggal);
        Carbon::setLocale('id');
        $format = 'l, d F Y';

        $event = Event::create([
            'event_name'=> $newevent['event_name'],
            'time'=> $carbon->format($format),
            'location'=> $newevent['location'],
            'status'=> $newevent['status'],
            'descriptions'=> $newevent['descriptions'],
        ]);

        $gambar = $request->file('event_photo');

        $path = '/storage/'. $gambar->storePublicly('event_images/', 'public');

        $event->event_photo = $path;

        $event->save();

        return redirect('/event');
    }
}
