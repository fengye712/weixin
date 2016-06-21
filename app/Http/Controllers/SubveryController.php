<?php

namespace App\Http\Controllers;


use Session,Cookie,DB,Memcache,Input,Redirect,Validator,IsValid,Request;
class SubveryController extends Controller
{	


	//新建调查表
	public function index(){
		if ($_POST) {
			//接收数据
			$title=Request::get('sub_title');
			$sub_content=Request::get('sub_content');
			

		}else{
			//$code=$_GET['code'];

			//Session::put('$u');
			return view('subvery.index');
		}
	}
}