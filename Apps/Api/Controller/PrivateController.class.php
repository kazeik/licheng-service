<?php
namespace Api\Controller;
use Think\Controller\RestController;

abstract class PrivateController extends BaseController{
    protected $uid;
    function __construct(){
        $uid = I('uid');
        // $this->uid = $uid;
        if(empty($uid)){
            jsondata(null,"用户id不存在");
            die();
        }
    }
}
