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
		$typeform = new RamenTypeform('BFMeTmCXWVLW7XwWR2QDhY7X83qN6hA1YJyMSTF61NdV');
		$data = $typeform->getResponses('of5Vu9');
		$result = [];
		try{
			$response = $client->get("https://www.instagram.com/aihijau/?__a=1");
		}catch(\Exception $e){
			dd($e);
		}

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
			
			$inst = (substr($temp->instagram, 0, 1) == '@') ? substr($temp->instagram, 1) : substr($temp->instagram, 0);
			$response = null;
			try{
				$response = $client->get("https://www.instagram.com/".$inst."/?__a=1");
			}catch(\Exception $e){
				dd($e);
				$response = null;
			}
			if(!is_null($response)){
				$body = json_decode($response->getBody());
				$temp->instagram_name = $body->graphql->user->full_name;
				$temp->instagram_biography = $body->graphql->user->biography;
				$temp->instagram_picture = $body->graphql->user->profile_pic_url_hd;
			
			}
			
			$result[] = $temp;
		}
		return response()->json($result);
	}

	public function survey(Request $request){
		return view('survey');
	}
}
