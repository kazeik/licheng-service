<?php
 namespace Api\Controller;

use \Think\Controller\RestController;

class UserController extends PrivateController{
	
	public function getuserinfo(){
		$user = M('user');
		$data = $user->select();
		if(!$data){
			$this->response("暂无数据","json");
		}
		else{
			$this->response($data,"json");
		}
		
	}
}
