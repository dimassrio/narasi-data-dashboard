<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logic\RamenTypeform;
use GuzzleHttp\Client;
class SurveyController extends Controller
{
    public function result(Request $request){
		$client = new Client([
			"headers" => ["User-Agent" => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36"],
			"accept" => "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8"
		]);
		$typeform = new RamenTypeform('9nhJymUqoK4z8DZPkyFVJDG9ZgdQWVXhsN968W3rQvzs');
		$response = null;
		\Cache::delete('survey');
		if(is_null(\Cache::get('survey'))){
			$data = $typeform->getResponses('oF5Vu9','?page_size=1000');
			$result = [];
			// dd($data);
			foreach ($data as $key => $value) {
				$temp = new \StdClass;
				$temp->name = array_first(array_where($value->answers, function($value, $key){
					return $value->field_identifier =='ZvNGvCJeVVaO';
				}))->answer;
				
				$temp->email = array_first(array_where($value->answers, function($value, $key){
					return $value->field_identifier =='z5dtzSBwL0v5';
				}))->answer;
				$temp->instagram = array_first(array_where($value->answers, function($value, $key){
					return $value->field_identifier =='CwbdSEq6aUpW';
				}))->answer;
				
				$temp->instagram = (substr($temp->instagram, 0, 1) == '@') ? substr($temp->instagram, 1) : substr($temp->instagram, 0);
				$result[] = $temp;
			}
			$response = new \StdClass;
			$response->data = $result;
			$response->meta = new \StdClass;
			$response->meta->total_items = count($data);
			\Cache::set('survey', json_encode($response), 60);
		};
		$response = json_decode(\Cache::get('survey'));
	
		return $response;
	}

	public function apiResult(Request $request){
		return response()->json($this->result($request));
	}

	public function survey(Request $request){

		return view('survey');
	}

	public function hasil(Request $request){
		// $data = $this->result($request);
		return view('hasil');
	}
}
