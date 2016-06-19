<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB,Session;
class IndexController extends Controller
{
    //
       public function index(){
       	// $a= $this->getSslPage("https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=wx974ebfe401505c5d&corpsecret=5suJ0avXFn-jrNsYPXZ7fUFGGsmK1oDe5iZw-JcR_p0bxLKbjQGz3LF6uxI2NIBE");
          
        //    $a=json_decode($a,true);
          
       	// $url="https://qyapi.weixin.qq.com/cgi-bin/user/list?access_token=".$a['access_token']."&department_id=1&fetch_child=1&status=0";
        //     $data=$this->getSslPage($url);
        //     dd($data);
              return view('index');
        }
		/*
		public function verify(){
		
	    include_once "./php/wxBizMsgCrypt.php";
		// 加密key 
		$encodingAesKey = "a5Uhuzo9MF2lo9JxtiqlhYQzoyyCioucBqWJCAaMEqH";
		// token 值
		$token = "testapi";
		// 企业号ID
		$corpId = "wx07a6616a2553293f";

		$sVerifyMsgSig = $_GET['msg_signature'];
		$sVerifyTimeStamp = $_GET['timestamp'];
		$sVerifyNonce = $_GET['nonce'];
		$sVerifyEchoStr = $_GET['echostr'];

		// 需要返回的明文
		$sEchoStr = "";
		$wxcpt = new WXBizMsgCrypt($token, $encodingAesKey, $corpId);

		$errCode = $wxcpt->VerifyURL($sVerifyMsgSig, $sVerifyTimeStamp, $sVerifyNonce, $sVerifyEchoStr, $sEchoStr);

		// print_r($errCode);die;

		if ($errCode == 0) {
			// 验证URL成功，将sEchoStr返回
			echo $sEchoStr;
		} else {
			print("ERR: " . $errCode . "\n\n");
		}
		
			echo 333;
		}
		*/
		
		//新建会议
		public function createMeeting(){
		if ($_POST) {
			echo '提交';
		}else{
			//$code=$_GET['code'];
			// $token=$this->token();
			// $url="https://qyapi.weixin.qq.com/cgi-bin/user/getuserinfo?access_token=$token&code=$code";
			// $data=$this-> https_request($url);
			// $da=json_decode($data,true);
			// $user_id=$da['UserId'];
			// Session::put('user_id',$user_id);
			//$u=Session::get('user_id');

			return view('meet.create');
		}
		
		
		}
		//获取code
		public function code(){

		$corpId = "wx07a6616a2553293f";
		$uri="http://118.192.138.124/project/public/index.php/createMeeting";
		
		$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx07a6616a2553293f&redirect_uri=http://118.192.138.124/project/public/index.php/createMeeting&response_type=code&scope=SCOPE#wechat_redirect";	
		$result =$this-> https_request($url);
		
		}

		//主动发消息
		public function sendMessage(){
			$sql=DB::select("select * from test");
			if ($sql) {
				print_r($sql[0]);
			}
		}
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

}
