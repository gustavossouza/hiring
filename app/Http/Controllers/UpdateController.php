<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends GeralController
{
    
	public function ultimoAtualizacoes(){
		$response = $this->getws("/updates.json?print=pretty");
		if($response){
			$json = json_decode($response);
			$json = $json->items;
		}
		return json_encode($json);
	}

}
