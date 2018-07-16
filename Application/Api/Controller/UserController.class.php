<?php
 namespace Api\Controller;

use \Think\Controller\RestController;
/**
 * 用户控制器
 */
class UserController extends PrivateController{
	/**
	 * 依据uid获取用户信息
	 */
	public function getuserinfo($uid =''){
		jsondata( M('user')->where("uid='".$uid."'")->find());
	}
	/**
	 * 获取用户下的平均数据
	 */
	public function gethomedata($uid){
		$db = M('record');
		$allMoney =  $db->where("uid='".$uid."'")->sum('allmoney'); 	//总金额
		$allOilValue = $db->where("uid='".$uid."'")->sum('oilmass');//总油量
		$allLc = $db->where("uid='".$uid."'")->max('mileage');//总里程
		$pjoil = $allOilValue / ($allLc/100);
		$data['allmoney'] = floatval($allMoney);
		$data['alloilvalue'] = floatval($allOilValue);
		$data['alllicheng'] = $allLc;
		$data['pingjun'] = round($pjoil,2);

		$userDb = M('user');
		$cardata  =$userDb->where("uid='".$uid."'")->find();
		$data['car']= $cardata;
		jsondata($data);
	}
}
