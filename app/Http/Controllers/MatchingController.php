<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchingController extends Controller {

	public function index(Request $request) {
	    return view('matching.index');
    }

}
