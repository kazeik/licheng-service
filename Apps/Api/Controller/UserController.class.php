<?php
 namespace Api\Controller;

use \Think\Controller\RestController;

class UserController extends PrivateController{
	
	public function getuserinfo(){
		jsondata( M('user')->where("uid='".I('uid')."'")->find());
	}
	
	public function getAllRecoredByUid(){
		jsondata(M("record") ->where("uid='".I('uid')."'")-> select());
	}
}
