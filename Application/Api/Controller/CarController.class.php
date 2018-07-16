<?php
namespace Api\Controller;
use Think\Controller\RestController;

class CarController extends PrivateController{
	/**
	 * 添加用户选择的车辆
	 */
	function addCar(){
		$nickname = I('nickname');
		$uid = I('uid');
		$carbrand=I('carbrand');
		$cartype=I('cartype');
		$dataArr = array(
			'nickname'=>$nickname,
			'uid' => $uid,
			'carbrand' => $carbrand,
			'cartype' => $cartype
		);
		$flag = M('user')->data($dataArr)->add();
		if($flag){
			jsondata($flag,'数据添加成功');
		}
		else{
			jsondata(null,'数据添加失败');
		}
	}
}
