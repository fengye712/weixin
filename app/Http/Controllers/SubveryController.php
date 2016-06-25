<?php

namespace App\Http\Controllers;

use App\Http\Basic;
//use App\model\Subvery;
use Session,Cookie,DB,Memcache,Input,Redirect,Validator,IsValid,Request;

class SubveryController extends Controller
{	


	//新建调查表
	public function index(){
		if ($_POST) {
			//$s=new Subvery;
			// //接收数据
			ini_set("display_errors","On");
			$s['s_title']=Request::get('sub_title');
			$s['s_desc']=Request::get('sub_content');
			$s['s_object']=Request::get('"m_object');
			$s['s_type']=Request::get('m_type');
			
			$s['s_endtime']=Request::get('m_endtime');
			
                               $sub_item=Request::get('m_item');
                             //  print_r($_POST);
                              // dd($s);
                              $res=DB::table('subvery')->insertGetId( $s );
                              //  $res=Subvery::addSub($s);
			 if ($res>0) {
				$sid=$res;
				$count=count($sub_item);
				for($i=0;$i<$count;$i++)
				{
				$sql="insert into subitem(s_item,sid) value('$sub_item[$i]',$sid)";
				$r=DB::insert($sql);
				
				}
				
				if ($r) {
                                                    echo "<script>alert('添加成功')</script>";
				}else{
					echo "<script>alert('添加失败')</script>";
					echo Redirect::action("SubveryController@index");	
				}
			 	//echo 2323;die;
			 }else{
			 	echo "<script>alert('添加失败')</script>";
				echo Redirect::action("SubveryController@index");
			 }
			

		}else{

			//$code=$_GET['code'];
			
			if (Session::get('access_token')) {
				$token=Session::get('access_token');
				return view('subvery.index');
			}else{

			$n=new BasicController();
			$na=$n->token();
			Session::put('access_token',$na);

			         return view('subvery.index');
			}
			
			
		}
	}
}