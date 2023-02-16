<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    
   public function __construct(){

        $this->middleware('auth');
    }

    public function index(){

        $trips = Trip::whereUserId(Auth::id())->latest()->take(3)->get();

        return view('dashboard', compact('trips'));
    }


}
