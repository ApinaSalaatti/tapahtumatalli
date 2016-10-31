<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
    public function view() {
		return view('search');
	}
	
	public function search(Request $request, $type) {
		if($type == 'venue')
			return $this->searchVenue($request);
		else if($type== 'performer')
			return $this->searchPerformer($request);
	}
	
	private function searchVenue(Request $request) {
		$venues = array();
		$venue = [];
		$venue['name'] = "Gastropub Stone's";
		$venue['img'] = "images/about_guy.png";
		$venue['ratings'] = 111;
		$venues[] = $venue;
		
		$venue = [];
		$venue['name'] = "Kultapalmu";
		$venue['img'] = "images/about_guy.png";
		$venue['ratings'] = 222;
		$venues[] = $venue;
		
		$venue = [];
		$venue['name'] = "William K Kurvi";
		$venue['img'] = "images/about_guy.png";
		$venue['ratings'] = 222;
		$venues[] = $venue;
		return $venues;
		
		
		/*$venues = [];
		$v = \App\Venue::all();
		for($i = 0; $i < count($v); $i++) {
			$venue = [];
			$venue['name'] = $v[$i]->name;
			$venue['ratings'] = $i * 100;
			$venue['img'] = "images/about_guy.png";
			$venues[] = $venue;
		}
		return $venues;*/
	}
	
	private function searchPerformer(Request $request) {
		
	}
}
