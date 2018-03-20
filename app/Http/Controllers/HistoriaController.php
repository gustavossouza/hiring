<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriaController extends GeralController
{


	public function Melhores(){
		return View("/Historia/Melhores", array());		
	}
	public function Novos(){
		return View("/Historia/Novos", array());		
	}
	public function Tops(){
		return View("/Historia/Top", array());		
	}

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

	public function askstories(){

		$response = $this->getWS("/askstories.json?print=pretty");
		return $response;

	}

	public function showstories(){

		$response = $this->getWS("/showstories.json?print=pretty");
		return $response;

	}

	public function jobstories(){

		$response = $this->getWS("/jobstories.json?print=pretty");
		return $response;

	}
	
}
