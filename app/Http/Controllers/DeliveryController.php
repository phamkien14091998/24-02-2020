<?php namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DeliveryController extends Controller {

	public function gantt(Request $request) {
	    return view('delivery.gantt');
    }

    public function  listDelievry(Request $request){
	    $client = $this->getAllClient();
        return view('delivery.index')->with(['clients' => $client]);
    }

    public function addItalk(Request $request) {
        return view('delivery.detail');
    }

	public function  editItalk(Request $request){
        return view('delivery.detail');
    }

    protected function getAllClient() {
	    $api = new ApiController();
	    $client = $api->getApi(ConstantHelper::GET_CLIENT);
	    $client['item'][0] = ['data' => 99, 'client_name' => '全エリア'];

	    return $client['item'];
    }

}
