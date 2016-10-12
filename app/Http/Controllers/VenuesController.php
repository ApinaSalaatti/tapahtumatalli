<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Venue;

class VenuesController extends Controller
{
    public function index() {
		//$venues = DB::table('venues')->get();
		$venues = Venue::all();
		return view('venues.index', ['venues' => $venues]);
	}
	
	public function show($id) {
		
		$venue = Venue::find($id);
		return view('venues.show', ['venue' => $venue]);
	}
}
