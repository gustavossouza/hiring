<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ixudra\Curl\Facades\Curl;

class GeralController extends Controller
{
 public $type = "LOCAL";

	public function getWS($api){
		if($this->type=="DEV"){ 
      $url = "url-defined";
  }else{
      $url = "https://hacker-news.firebaseio.com/v0/";
  }

  $response = Curl::to($url.$api)->get();

  return $response;
	}
}
