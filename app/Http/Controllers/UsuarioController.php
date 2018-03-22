<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends GeralController
{
    
	public function consultarUsuario($name){
		if($name){
			$result = $this->getWS("/user/{$name}.json?print=pretty");
		}else{
			$result = "Por favor selecionar o cliente!";
		}

		return $result; 
	}

	public function ultimoProfileAtualizacoes(){
		$response = $this->getws("/updates.json?print=pretty");
		$resultado = array();
		if($response){
			$json = json_decode($response);
			$count = 0;
			foreach ($json->profiles as $item) {
				
				if($count == 5)
					break;

				$resultadoConsulta = $this->consultarUsuario($item);
				array_push($resultado, json_decode($resultadoConsulta));

				$count = $count + 1;
			}
		}
		return $resultado;
	}


}
