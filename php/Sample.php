<?php

include_once "wxBizMsgCrypt.php";
// 加密key 
$encodingAesKey = "a5Uhuzo9MF2lo9JxtiqlhYQzoyyCioucBqWJCAaMEqH";
// token 值
$token = "testapi";
// 企业号ID
$corpId = "wx07a6616a2553293f";

/**
 * 接收到该请求时，企业应
 * 1.解析出Get请求的参数，包括消息体签名(msg_signature)，时间戳(timestamp)，随机数字串(nonce)以及公众平台推送过来的随机加密字符串(echostr),
 * 这一步注意作URL解码。
 * 2.验证消息体签名的正确性 
 * 3. 解密出echostr原文，将原文当作Get请求的response，返回给公众平台
 * 第2，3步可以用公众平台提供的库函数VerifyURL来实现。
 */

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
/**
 * 企业收到post请求之后应该
 * 1.解析出url上的参数，包括消息体签名(msg_signature)，时间戳(timestamp)以及随机数字串(nonce)
 * 2.验证消息体签名的正确性。
 * 3.将post请求的数据进行xml解析，并将<Encrypt>标签的内容进行解密，解密出来的明文即是用户回复消息的明文，明文格式请参考官方文档
 * 第2，3步可以用公众平台提供的库函数DecryptMsg来实现。
 */
// $wxcpt = new WXBizMsgCrypt($token, $encodingAesKey, $corpId);
// $sReqMsgSig = $_GET['msg_signature'];
// $sReqTimeStamp = $_GET['timestamp'];
// $sReqNonce = $_GET['nonce'];
// // post请求的密文数据
// $sReqData = file_get_contents("php://input");
// $sMsg = "";  // 解析之后的明文
// $errCode = $wxcpt->DecryptMsg($sReqMsgSig, $sReqTimeStamp, $sReqNonce, $sReqData, $sMsg);
// // 解密成功，sMsg即为xml格式的明文
// $data = simplexml_load_string($sMsg, 'SimpleXMLElement', LIBXML_NOCDATA);
// $reply_msg = "<xml>
//  <ToUserName><![CDATA[{$data->FromUserName}]]></ToUserName>
//  <FromUserName><![CDATA[{$corpId}]]></FromUserName>
//  <CreateTime>{$sReqTimeStamp}</CreateTime>
//  <MsgType><![CDATA[text]]></MsgType>
//  <Content><![CDATA[{$data->Content}!!!]]></Content>
// </xml>";
// $sEncryptMsg = ""; //xml格式的密文
// $errCode = $wxcpt->EncryptMsg($reply_msg, $sReqTimeStamp, $sReqNonce, $sEncryptMsg);
// echo $sEncryptMsg;