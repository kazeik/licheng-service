<?php
namespace Api\Controller;
use Think\Controller\RestController;

abstract class PrivateController extends BaseController{

    function __construct(){
        $uid = I('uid');
        if(empty($uid)){
            jsondata(null,"用户id不存在");
            die();
        }
    }
}
