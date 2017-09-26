<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
    public function xinchao()
    {
    	echo "Chao cac ban laravel => MyController";
    }

    public function Khoahoc($id)
    {
    	echo "Chao cac ban laravel => Khoahoc  ".$id;
    	return redirect()->route('Myroute');
    }

    public function GetURL(Request $request)
    {
    	// echo $request->path()."<br/>";
    	// echo $request->url()."<br/>";
    	echo Request::segment(1)."<br/>";
    	if($request->is('Myre*')){
    		echo "dung day";
    	}
    	if($request->isMethod('get')){
    		echo "222222222222";
    	}
    }

    public function postForm(Request $request)
    {
    	echo "Ten cua ban: ";
    	echo $request->name."<br/>";

    	if($request->has('age')){
    		echo "Co bien age gui len ".$request->age."<br/>";
    	}else {
    		echo "Khong bien age gui len ".$request->age."<br/>";
    	}
    }

    public function setCookie()
    {
    	$response = new Response();
    	$response->withCookie(
    		'khoahoc',
    		'laravel - start',
    		0.1
    		);
    	return $response;
    }

    public function getCookie(Request $resquest)
    {
    	return $resquest->cookie('khoahoc');
    }
}
