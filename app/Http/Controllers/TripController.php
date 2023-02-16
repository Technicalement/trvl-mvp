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
                "departure_date" => $request->depature_date,
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

        $trip = Trip::findOrFail($id);

        $doc = Document::where('document_type', 'Visa')->where('trip_id', $id)->first();
    
        return view('trip.trip')->with(compact('trip', 'doc'));
     }
    

    public function edit($id){

        $trip = Trip::findOrFail($id);

        $visa = Document::where('document_type', 'Visa')->where('trip_id', $id)->first();

        $passport = Document::where('document_type', 'Passport')->where('trip_id', $id)->first();

        return view('trip.edit', compact('trip', 'visa', 'passport'));
    }

    public function update(Request $request, $id)
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
         

       $trip = Trip::findOrFail($id);
       $trip->name = $request->get('name');
       $trip->file = $name;
       $trip->departure_city = $request->get('departure_city');
       $trip->city_id = $request->get('city_id');
       $trip->arrival_date = $request->get('arrival_date');
       $trip->departure_date = $request->get('departure_date');
       $trip->reason = $request->get('reason');
       $trip->note = $request->get('note');
       $trip->update();
        }
     }

     // Passport
       $passport = Document::where('document_type', 'Visa')->where('trip_id', $id)->first();
       $passport->document_number = $request->get('passport_number');
       $passport->date_of_expiration = $request->get('passport_expiration');
       $passport->update();

        // Visa Info
        $visa = Document::where('document_type', 'Passport')->where('trip_id', $id)->first();
        $visa->document_number = $request->get('passport_number');
        $visa->start_date = $request->get('visa_start_date');
        $visa->end_date = $request->get('visa_end_date');
        $visa->update();

     if($trip) {
        return back()->with('success', 'Success! Your trip has been updated');
     }

     else {
         return back()->with('failed', 'Alert! failed to  update trip');
     }
    }


}
