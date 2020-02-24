<?php namespace App\Http\Controllers;

use App\Helpers\UtilHelper;
use App\Http\Requests;
use App\Helpers\ConstantHelper;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GirlController extends Controller {

	public function listGirl(Request $request){

		return view('girl.index');
	}
	public function  postGirl(Request $request){
        $client_cd = UtilHelper::getCurrentClientCd();
        $girl_tel = $request->input('tel');
        $img_path = "http://img.eki-go.com/img_girl/";
        $img_path_admin = "http://img.eki-go.com/img_girladmin/";
        $girl_mail = "";
//
        $api = new ApiController();
        $pathDataList = ConstantHelper::DOMAIN_SC  . ConstantHelper::GET_SEARCH_GIRL;
        $data_api = [
            'client_cd' => $client_cd,
            'img_path' =>   $img_path,
            'img_path_admin' =>   $img_path_admin,
            'girl_tel' => $girl_tel,
            'girl_mail' => $girl_mail
        ];
        $data_get['item'] = $api->getDstaApi($pathDataList, $data_api);

        return view('girl.index')->with(['data_get' => $data_get]);
//     //return $data_get;
    }




}
