<?php namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use Illuminate\Http\Request;

class RegisterController extends Controller {

	public function login(){
		return view('register.login');
	}

	public function postLogin(Request $request) {
	    $api = new ApiController();
        $client_id = $request->input('client_id');
        $client_pass = $request->input('client_pass');
	    $data_send = [
	        'client_id' => $client_id,
            'client_pass' => $client_pass
        ];

	    $end_point = ConstantHelper::LOGIN;
	    $login_reponse  = $api->getApi($end_point, $data_send);
	    dd($login_reponse);
        return redirect('/delivery');
    }

	public function logOut() {
	    Auth::logOut();
	    return redirect('/login');
    }

}
