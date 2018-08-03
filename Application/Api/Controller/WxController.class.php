<?php

namespace Api\Controller;

use Think\Controller;
use Com\weixin\Wechat;


class WxController extends Controller
{

    private $weObj;

    public function getmsg()
    {
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
        switch ($type) {
            case Wechat::MSGTYPE_TEXT:
                //    $msgdata = $weObj->getRevContent();
                $msgdata = "宗亲您好，感谢您的关注，目前功能正在逐步完善中";
                $weObj->text($msgdata)->reply();
                exit;
                break;
            case Wechat::MSGTYPE_EVENT:
                break;
            case Wechat::MSGTYPE_IMAGE:
                $weObj->text("宗亲您好，我已收到您发来的图片，我将会一一整理好，谢谢您")->reply();
                break;
            default:
                $weObj->text("宗亲您好，目前回复的消息为自动回复，请忽略，后续将逐步提供更方便快捷的功能。感谢您的关注")->reply();
        }

//        //获取菜单操作:
//        $menu = $weObj->getMenu();
//        //设置菜单
//        $newmenu = array(
//            "button" =>
//                array(
//                    array('type' => 'click', 'name' => '最新消息', 'key' => 'MENU_KEY_NEWS'),
//                    array('type' => 'view', 'name' => '我要搜索', 'url' => 'http://www.baidu.com'),
//                )
//        );
//        $result = $weObj->createMenu($newmenu);
    }

    // private function text_msg($data){
    //     $weObj->text($data)->reply();
    // }

    // private function default_msg($data){
    //     $weObj->text("help info")->reply();
    // }
}
