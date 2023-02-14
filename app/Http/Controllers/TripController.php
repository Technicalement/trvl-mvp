<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    
    public function create(){

        return view('trip.create');
    }

    public function addProduct(Request $request)
    {

        request()->validate([
            'trip_name' => 'required',
            'city_id' => 'required',
            'departure_place' => 'required',
            'arrival_date' => 'required',
            'depature_date' => 'required',
            'reason' => 'required',
            'passport_number' => 'required',
            'passport_expiration' => 'required',
            'visa_number' => 'required',
            'visa_start_date' => 'required',
            'visa_end_date' => 'required',
            'notes' => 'required',
            'attachment' => 'required|mimes:pdf,xlxs,xlx,docx,doc,csv,txt,png,gif,jpg,jpeg|max:2048',

        ]);

        if($files = $request->file('product_photo')){
            
            $destinationPath = public_path('/attachements/');
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['image'] = "$profileImage";

            //save in database
            
            $productmodel = new Trip();
            $productmodel->product_photo="$profileImage";
            $productmodel->category_id = $request->category_id;
            $productmodel->brand_name = $request->brand_name;
            $productmodel->type_name = $request->type_name;
            $productmodel->product_name = $request->product_name;
            $productmodel->product_price = $request->product_price;
            $productmodel->units = $request->units;
            $productmodel->in_stock = $request->in_stock;
            $productmodel->product_description = $request->product_description;
            $productmodel->user_id = auth()->user()->id;
            $productmodel->save();


        }

        return back()->with('success', 'L article a été ajoutée!');
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
