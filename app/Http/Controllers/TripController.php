<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TripController extends Controller
{

   public function __construct(){

        $this->middleware('auth');
    }


    public function index(){

        $trips = Trip::whereUserId(Auth::id())->get();

        return view('trip.trips', compact('trips'));
    }

    
    public function create(){

        return view('trip.create');
    }

    public function addTrip(Request $request)
    {
      $request->validate([
            'name' => 'required',
            'arrival_city' => 'required',
            'arrival_date' => 'required',
            'reason' => 'required',
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
                "city_id" => $request->arrival_city,
                "arrival_date" => $request->arrival_date,
                "depature_date" => $request->depature_date,
                "reason" => $request->reason,
                "note" => $request->note,
                "user_id" => auth()->user()->id,

        ]);
        }
     }

       $latest_trip = Trip::query()->where('user_id', auth()->user()->id)->latest('created_at')->first();
     

     // Passport Info
        $type1 = "Passport";
        $passport = Document::create([
        'name' => $latest_trip->name,
        'trip_id' => $latest_trip->id,
        'user_id' => auth()->user()->id,
        'document_number'=> $request->passport_number,
        'date_of_expiration' => $request->passport_expiration,
        'document_type' => $type1,
    ]);

        // Visa Info
        $type2 = "Visa";
        $visa = Document::create([
        'name' => $latest_trip->name,
        'document_number'=> $request->visa_number,
        'start_date'=> $request->visa_start_date,
        'end_date' => $request->visa_end_date,
        'date_of_expiration' => $request->passport_expiration,
        'trip_id' => $latest_trip->id,
        'user_id' => auth()->user()->id,
        'document_type' => $type2,
    ]);

     if($trip) {
        return back()->with('success', 'Success! New trip has been added');
     }

     else {
         return back()->with('failed', 'Alert! failed to add new trip');
     }
    }

    public function getTrip($id){

        $trip = Trip::findOrFail($id);;
    
        return view('trip.trip')->with(compact('trip'));
     }
    

    public function edit(){

        return view('trip.edit');
    }

}
