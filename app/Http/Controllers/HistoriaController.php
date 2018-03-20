<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriaController extends GeralController
{



 // API
 public function bestStories(){

		$response = $this->getWS("/beststories.json?print=pretty");
		return $response;
	}

	public function newStories(){

		$response = $this->getWS("/newstories.json?print=pretty");
		return $response;
	}

	public function topStories(){

		$response = $this->getWS("/topstories.json?print=pretty");
		return $response;
	}
}
