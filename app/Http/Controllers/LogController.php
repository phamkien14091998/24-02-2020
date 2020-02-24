<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LogController extends Controller {

	public function listLog(Request $request) {
	    return view('log.index');
    }

}
