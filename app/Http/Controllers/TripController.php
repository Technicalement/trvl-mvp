<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    
    public function create(){

        return view('trip.create');
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
