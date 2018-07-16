<?php
 namespace Api\Controller;
use Think\Controller\RestController;
use Api\Common;

class PublicController extends BaseController{
	
	public function register(){
		echo "注册";
	}
	
	/**
	* 获取当日油价
	     */
	    public function getoilprice($date){
		$today = date('Y-m-d');
		$db = M('oil');
		$data = null;
		if(empty($date)){
			$data =  $db->where("date='".$today."'")->find();
		}
		else{
			$data =  $db->where("date='".$date."'")->find();
		}
		jsondata($data);
	}
	
	/**
	* 获取油器类型
	     */
	    public function getoiltype(){
		$db = M('oiltype');
		jsondata($db->select(),"获取数据成功");
	}
	
	
	/**
	* 加载车辆信息
	     */
	    function loadcars(){
		$data = file_get_contents(APP_PATH."/Data/cars");
		$jsondata = json_decode($data);
		jsondata($jsondata);
	}
	/**
     * 意见反馈
     */
	function feedback($message){
		if( strlen($message) ==0){
			jsondata(null,"内容不能为空");
		}
		else{
			$data = array(
			                'message'=>$message,
			                'time' => date('Y-m-d')." ".date('H:i:s')
			            );
			$flag = M(feedback)->data($data)->add();
			jsondata($flag,"意见反馈成功");
		}
		
	}
}
