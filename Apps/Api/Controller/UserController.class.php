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

	public function gethomedata(){
		$uid = I('uid');
		$db = M('record');
		$allMoney =  $db->where("uid='".$uid."'")->sum('allmoney'); 	//总金额
		$allOilValue = $db->where("uid='".$uid."'")->sum('oilmass');//总油量
		$allLc = $db->where("uid='".$uid."'")->field('mileage')->find();//总里程
		$allLcValue = $allLc['mileage'];
		$pjoil = $allOilValue / $allLcValue;
		$data['allmoney'] = $allMoney;
		$data['alloilvalue'] = $allOilValue;
		$data['alllicheng'] = $allLcValue;
		$data['pingjun'] = round($pjoil,2);
		jsondata($data);
	}
}
