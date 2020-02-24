<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SyukinController extends Controller {

	public function listInWeek(Request $request) {
	    return view('syukin.index');
    }

}
