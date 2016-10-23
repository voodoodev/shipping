<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tracking;

class TrackingController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }

    public function search(Request $request, $trackingCode)
    {
        return Tracking::where('tracking_code', $trackingCode)->get();
    }
}
