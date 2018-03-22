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
	public function Trabalhos(){
		return View("/Historia/Trabalho", array());		
	}
	public function Mostrar(){
		return View("/Historia/Mostrar", array());		
	}

 // API

 //Consulta as melhores stories
 public function bestStories(){
		$response = $this->getWS("/beststories.json?print=pretty");
		$jsonResponse = json_decode($response);
		$resultado = array();

		$count = 0;
		foreach ($jsonResponse as $item) {
				
			if($count == 5)
				break;

			$responseConsulta = $this->consultarInformacao($item);
			array_push($resultado, json_decode($responseConsulta));
			$count = $count + 1;
		}

		return $resultado;
	}

 //Consulta os novos stories
	public function newStories(){
		$response = $this->getWS("/newstories.json?print=pretty");
		$jsonResponse = json_decode($response);
		$resultado = array();

		$count = 0;
		foreach ($jsonResponse as $item) {
				
			if($count == 5)
				break;

			$responseConsulta = $this->consultarInformacao($item);
			array_push($resultado, json_decode($responseConsulta));
			$count = $count + 1;
		}

		return $resultado;
	}

 //Consulta os tops stories
	public function topStories(){
		$response = $this->getWS("/topstories.json?print=pretty");
		$jsonResponse = json_decode($response);
		$resultado = array();

		$count = 0;
		foreach ($jsonResponse as $item) {
				
			if($count == 5)
				break;

			$responseConsulta = $this->consultarInformacao($item);
			array_push($resultado, json_decode($responseConsulta));
			$count = $count + 1;
		}

		return $resultado;
	}

	/* -- */
 
 //Consulta os show stories
	public function showStories(){
		$response = $this->getWS("/showstories.json?print=pretty");
		$jsonResponse = json_decode($response);
		$resultado = array();

		$count = 0;
		foreach ($jsonResponse as $item) {
				
			if($count == 5)
				break;

			$responseConsulta = $this->consultarInformacao($item);
			array_push($resultado, json_decode($responseConsulta));
			$count = $count + 1;
		}

		return $resultado;
	}

 //Consulta os jobs stories
	public function jobStories(){
		$response = $this->getWS("/jobstories.json?print=pretty");
		$jsonResponse = json_decode($response);
		$resultado = array();

		$count = 0;
		foreach ($jsonResponse as $item) {
				
			if($count == 5)
				break;

			$responseConsulta = $this->consultarInformacao($item);
			array_push($resultado, json_decode($responseConsulta));
			$count = $count + 1;
		}

		return $resultado;
	}

	/* -- */

	//Consultas as ultimas atualizacoes
	public function ultimoItemAtualizacoes(){
		$response = $this->getws("/updates.json?print=pretty");
		$resultado = array();
		if($response){
			$json = json_decode($response);
			$count = 0;
			foreach ($json->items as $item) {
				
				if($count == 5)
					break;

				$resultadoConsulta = $this->consultarInformacao($item);
				array_push($resultado, json_decode($resultadoConsulta));

				$count = $count + 1;
			}
		}
		return $resultado;
	}
	
}
