<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends GeralController
{
    
	public function consultarUsuario(Request $form){
		if($form["name"]){
			$name = $form["name"];
			$result = $this->getWS("/user/{$name}.json?print=pretty");
		}else{
			$result = "Por favor selecionar o cliente!";
		}

		return $result; 
	}

	public function ultimoProfile(){
		$response = $this->getws("/updates.json?print=pretty");
		if($response){
			$json = json_decode($response);
			$json = $json->profiles;
		}
		return json_encode($json);
	}


}
