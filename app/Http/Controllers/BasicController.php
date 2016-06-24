<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB,Session;
class BasicController extends Controller{
	//cull方法
		function https_request($url,$data = null){
		    $curl = curl_init();
		    curl_setopt($curl, CURLOPT_URL, $url);
		    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
		    if (!empty($data)){
		        curl_setopt($curl, CURLOPT_POST, 1);
		        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		    }
		    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		    $output = curl_exec($curl);
		    curl_close($curl);
		    return $output;
		}

		//获取token
		public function token(){
			// 企业号ID
			

			$appid = "wx07a6616a2553293f";
			
			$corpsecret="1PeGUvsv4CnoEocGl3Ad-E-E0TtDpebchUVVfhtv56AHYNSYRTzgTJ7Zo55B_0cw";

			$token_url="https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$appid&corpsecret=$corpsecret";

			$output =$this-> https_request($token_url);
			$jsoninfo = json_decode($output, true);

			return $access_token = $jsoninfo["access_token"];
		}

		public function test(){
			echo 123;
		}
}