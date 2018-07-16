<?php

namespace Api\Controller;
use Think\Controller;
use Com\weixin\Wechat;


class WxController extends Controller{

    private $weObj;

	public function getmsg(){
		header('Content-type:text');
		$options = array(
            'token' => 'ssss', // 		填写你设定的token
            'appid' => 'wx06469df3abd62436', // 		填写高级调用功能的appid
            'appsecret' => 'e9e3ed143e098b85d1bcd47a60a917da', // 		填写高级调用功能的密钥
            'encodingaeskey' => 'mCliJb7DAOUf2ydY0vtSuWHODOpgypemB3XEZLqb8fk'
        );
        import('Com.weixin.Wechat');
        $weObj = new Wechat($options);
		$weObj->valid();
	
        //获得用户发送过来的消息的类型，有"text","music","image"等
        $type = $weObj->getRev()->getRevType();
           switch($type) {
                   case Wechat::MSGTYPE_TEXT:
                //    $msgdata = $weObj->getRevContent();
                    $msgdata = "宗亲您好，感谢您的关注，目前功能正在逐步完善中";
                   $weObj->text($msgdata)->reply();
           			exit;
           			break;
           		case Wechat::MSGTYPE_EVENT:
           			break;
           		case Wechat::MSGTYPE_IMAGE:
           			break;
           		default:
                   $weObj->text("help info")->reply();
           }
    }

    // private function text_msg($data){
    //     $weObj->text($data)->reply();
    // }

    // private function default_msg($data){
    //     $weObj->text("help info")->reply();
    // }
}
