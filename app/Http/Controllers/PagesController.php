<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/*
 * Controller for any needed static pages without any functionality
 */
class PagesController extends Controller
{
	public function about() {
		return view('pages.about');
	}
	
	public function profile() {
		return view('pages.profile');
	}
}
