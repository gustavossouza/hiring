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
		$jsonResponse = json_decode($response);
		$resultado = array();

		$count = 0;
		foreach ($jsonResponse as $item) {
				
			if($count == 5)
				break;

			$responseConsulta = $this->consultarInformacao("/item/{$item}.json?print=pretty");
			array_push($resultado, json_decode($responseConsulta));
			$count = $count + 1;
		}

		return $resultado;
	}

	public function newStories(){
		$response = $this->getWS("/newstories.json?print=pretty");
		$jsonResponse = json_decode($response);
		$resultado = array();

		$count = 0;
		foreach ($jsonResponse as $item) {
				
			if($count == 5)
				break;

			$responseConsulta = $this->consultarInformacao("/item/{$item}.json?print=pretty");
			array_push($resultado, json_decode($responseConsulta));
			$count = $count + 1;
		}

		return $resultado;
	}

	public function topStories(){
		$response = $this->getWS("/topstories.json?print=pretty");
		$jsonResponse = json_decode($response);
		$resultado = array();

		$count = 0;
		foreach ($jsonResponse as $item) {
				
			if($count == 5)
				break;

			$responseConsulta = $this->consultarInformacao("/item/{$item}.json?print=pretty");
			array_push($resultado, json_decode($responseConsulta));
			$count = $count + 1;
		}

		return $resultado;
	}

	public function askStories(){
		$response = $this->getWS("/askstories.json?print=pretty");
		$jsonResponse = json_decode($response);
		$resultado = array();

		$count = 0;
		foreach ($jsonResponse as $item) {
				
			if($count == 5)
				break;

			$responseConsulta = $this->consultarInformacao("/item/{$item}.json?print=pretty");
			array_push($resultado, json_decode($responseConsulta));
			$count = $count + 1;
			}

		return $resultado;
	}

	public function showStories(){
		$response = $this->getWS("/showstories.json?print=pretty");
		$jsonResponse = json_decode($response);
		$resultado = array();

		$count = 0;
		foreach ($jsonResponse as $item) {
				
			if($count == 5)
				break;

			$responseConsulta = $this->consultarInformacao("/item/{$item}.json?print=pretty");
			array_push($resultado, json_decode($responseConsulta));
			$count = $count + 1;
		}

		return $resultado;
	}

	public function jobStories(){
		$response = $this->getWS("/jobstories.json?print=pretty");
		$jsonResponse = json_decode($response);
		$resultado = array();

		$count = 0;
		foreach ($jsonResponse as $item) {
				
			if($count == 5)
				break;

			$responseConsulta = $this->consultarInformacao("/item/{$item}.json?print=pretty");
			array_push($resultado, json_decode($responseConsulta));
			$count = $count + 1;
		}

		return $resultado;
	}

	
}
