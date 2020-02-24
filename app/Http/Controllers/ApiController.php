<?php namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use App\Helpers\UtilHelper;
use Ixudra\Curl\Facades\Curl;

class ApiController extends Controller {

    public function getApi($path, $data = []) {
        $response = Curl::to($path)
            ->withData($data)
            ->post();


        dd($response);




        $response = preg_replace ('/[^\x{0009}\x{000a}\x{000d}\x{0020}-\x{D7FF}\x{E000}-\x{FFFD}]+/u', ' ',$response);
        $num=strpos($response,'</result>?', 0);
        if($num !="" && $num !=0 ) {
            $num = $num + 9;
            $api_result = substr($response, 0, $num);
            $xml = simplexml_load_string($api_result);
            $json = json_encode($xml);
            $data = json_decode($json, TRUE);
        }
        else{
            $xml = simplexml_load_string($response);
            $json = json_encode($xml);
            $data = json_decode($json, TRUE);
        }
        return $data;
    }

    public function getDstaApi($path, $data = []) {
        $response = Curl::to($path)
            ->withData($data)
            ->post();

        $num=strpos($response,'</result>?', 0);
        if($num !="" && $num !=0 ) {
            $num = $num + 9;
            $api_result = substr($response, 0, $num);
            $xml = simplexml_load_string($api_result);
            $json = json_encode($xml);
            $data = json_decode($json, TRUE);
        }
        else{
            $xml = simplexml_load_string($response);
            $json = json_encode($xml);
            $data = json_decode($json, TRUE);
        }

        dd($data);

        return $response;
    }
    public function callApiFile($path, $data, $img,$directory_img) {
        $response = Curl::to($path)
            ->withData($data)
            ->withFile( 'Filedata',public_path("/img/{$directory_img}/{$img}"),'image/jpeg,image/gif', $img)
            ->post();
        return $response;
    }


}
