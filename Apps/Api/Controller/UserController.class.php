<?php
 namespace Api\Controller;

use \Think\Controller\RestController;

class UserController extends PrivateController{
	
	public function getuserinfo($uid =''){
		jsondata( M('user')->where("uid='".$uid."'")->find());
	}
	
	public function getAllRecoredByUid($uid =''){
		jsondata(M("record") ->where("uid='".$uid."'")-> select());
	}
}
