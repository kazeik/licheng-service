<?php
namespace Api\Controller;
use Think\Controller\RestController;

class CarController extends PrivateController{
	/**
	 * 添加用户选择的车辆
	 */
	function addCar($uid,$carbrand,$cartype){
		$dataArr = array(
		            'uid' => $uid,
		            'carbrand' => $carbrand,
		            'cartype' => $cartype
		        );
		$flag = M('user')->add($dataArr);
		if($flag){
			jsondata($flag,'数据添加成功');
		}
		else{
			jsondata(null,'数据添加失败');
		}
	}
}
