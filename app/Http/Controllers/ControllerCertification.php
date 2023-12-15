<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ControllerCertification extends Controller
{
    function createCertification(Request $request){
        $newcertificate = $request->validate([
            'name'=>'required',
            'link_url'=>'required',
            'logo_photo' => 'required|mimes:jpeg,jpg,png|max:1000',
            'description' => 'required',
        ]);
        $certificate = Certification::create([
            'name'=> $newcertificate['name'],
            'description' => $newcertificate['description'],
            'link_url' => $newcertificate['link_url']
        ]);
        $gambar = $request->file('logo_photo');
        $path = '/storage/'. $gambar->storePublicly('certi_images/', 'public');
        $certificate->logo_photo = $path;
        $certificate->save();
        return redirect('/about');
    }

    function deleteCertification(string $certificateid){
        $certificate = Certification::find($certificateid);
        $imagePath = str_replace("/storage/",'',$certificate->logo_photo);
        Storage::disk('public')->delete($imagePath);
        $certificate->delete();
        return redirect('/about');
    }

    function updateCertificateForm(string $certificateid){
        $certificate = Certification::find($certificateid);
        return view('updatecertificationform',[
            "certificate" => $certificate,
            "pagetitle" => "Update Certificate",
            "urlpage" => "/updatecertificationform"
        ]);
    }

    function updateCertification(string $certificateid, Request $request){
        $certificate = Certification::find($certificateid);
        $updatedcertificate = $request->validate([
            'name'=>'required',
            'link_url'=>'required',
            'logo_photo' => 'mimes:jpeg,jpg,png|max:1000',
            'description' => 'required',
            
        ]);

        $certificate->name = $updatedcertificate['name'];
        $certificate->link_url = $updatedcertificate['link_url'];
        $certificate->description = $updatedcertificate['description'];

        if($request['logo_photo']){
            $gambar = $request->file('logo_photo');
            $path = '/storage/'. $gambar->storePublicly('certi_images/', 'public');
            $imagePath = str_replace("/storage/",'',$certificate->logo_photo);
            $certificate->logo_photo = $path;
            if($certificate->save()){
                
                Storage::disk('public')->delete($imagePath);
            }
            return redirect('/about');
        }
        $certificate->save();
        
        return redirect('/about');
    }

}
