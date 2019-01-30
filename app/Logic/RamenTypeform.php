<?php
namespace App\Logic;
use WATR;
use WATR\Models\FormResponse;

class RamenTypeform extends WATR\Typeform{
	public function getResponses($formId, $params=null)
    {
		if(!is_null($params)){
        	$response = $this->http->get("/forms/" . $formId . "/responses".$params);
		}else{
        	$response = $this->http->get("/forms/" . $formId . "/responses");
		}
        $body = json_decode($response->getBody());
        $responses = [];
        if (isset($body->items)) {
            foreach ($body->items as $item) {
				if(isset($item->answers)){
					if(count($item->answers) > 0){
                		$responses[] = new FormResponse($item);
					}
				}
            }
        }
        return $responses;
    }
}