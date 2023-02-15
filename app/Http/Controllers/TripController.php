<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
            'trip_name' => 'required',
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'arrival_date' => 'required',
            'depature_date' => 'required',
            'reason' => 'required',
            'note' => 'required',
            'file' => 'required|mimes:pdf,xlxs,xlx,docx,doc,csv,txt,png,gif,jpg,jpeg|max:2048',
    ]);

    if ($request->hasfile('file')) {
        $file = $request->file('file');
        $name = time().rand(1,100).'.'.$file->extension();
        if ($file->move(public_path('uploads'), $name)) {
            $files[] = $name;
            $result = Trip::create([
                "file" => $name,
                "trip_name" => $request->trip_name,
                "departure_city" => $request->departure_city,
                "arrival_city" => $request->arrival_city,
                "arrival_date" => $request->arrival_date,
                "depature_date" => $request->depature_date,
                "reason" => $request->reason,
                "notes" => $request->notes,
                "user_id" => auth()->user()->id,

        ]);
        }
     }

     if($result) {
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
