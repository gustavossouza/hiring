<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerguntasController extends GeralController
{

	public function Ask(){
		return View("/Perguntas/Perguntas");
	}
	
	public function askStories(){
		$response = $this->getWS("/askstories.json?print=pretty");
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
	

}
