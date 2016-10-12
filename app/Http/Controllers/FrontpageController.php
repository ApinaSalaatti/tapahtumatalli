<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/*
 * Controller for the front page functionality
 */
class FrontpageController extends Controller
{
    public function show() {
		return view('welcome');
	}
}
