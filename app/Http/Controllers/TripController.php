<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Document;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TripController extends Controller
{

   public function __construct(){

        $this->middleware('auth');
    }

    
    public function create(){

        return view('trip.create');
    }

    public function addTrip(Request $request)
    {
      $request->validate([
            'name' => 'required',
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'arrival_date' => 'required',
            'depature_date' => 'required',
            'reason' => 'required',
            'passport_number' => 'required',
            'passport_expiration' => 'required',
            'visa_number' => 'required',
            'visa_start_date' => 'required',
            'visa_end_date' => 'required',
            'note' => 'required',
            'file' => 'required|mimes:pdf,xlxs,xlx,docx,doc,csv,txt,png,gif,jpg,jpeg|max:2048',
    ]);

    if ($request->hasfile('file')) {
        $file = $request->file('file');
        $name = time().rand(1,100).'.'.$file->extension();
        if ($file->move(public_path('uploads'), $name)) {
            $files[] = $name;
            $trip = Trip::create([
                "file" => $name,
                "name" => $request->name,
                "departure_city" => $request->departure_city,
                "arrival_city" => $request->arrival_city,
                "arrival_date" => $request->arrival_date,
                "depature_date" => $request->depature_date,
                "reason" => $request->reason,
                "note" => $request->note,
                "user_id" => auth()->user()->id,

        ]);
        }
     }

     $latest_trip = Trip::query()->where('user_id', auth()->user()->id)->latest('created_at')->first();
     
     $ze = "Test"; 
     $city = '2';
     $destination = Destination::create([
        'name' => $ze,
        'trip_id' => $latest_trip->id,
        'city_id' => $city,
    ]);

     // Passport Info
        $type1 = "Passport";
        $passport = Document::create([
        'name' => $ze,
        'trip_id' => $latest_trip,
        'user_id' => auth()->user()->id,
        'document_type' => $type1,
    ]);

        // Visa Info
        $type2 = "Visa";
        $visa = Document::create([
        'name' => $ze,
        'trip_id' => $latest_trip,
        'user_id' => auth()->user()->id,
        'document_type' => $type2,
    ]);

     if($trip) {
        return back()->with('success', 'Success! file uploaded');
     }

     else {
         return back()->with('failed', 'Alert! file not uploaded');
     }
    }



    public function trips(){

        return view('trip.trips');
    }


    public function trip(){

        return view('trip.trip');
    }

    public function edit(){

        return view('trip.edit');
    }

}
