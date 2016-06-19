<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB,Session;
class SubveryController extends Controller
{	


	//新建调查表
	public function index(){
		if ($_POST) {
			//接收数据
			dd($_POST);
		}else{
			return view('subvery.index');
		}
	}
}