<?php
 namespace Api\Controller;
 use Think\Controller\RestController;
 use Api\Common;

class PublicController extends BaseController{

    public function register(){
        
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
        }else{
            $data =  $db->where("date='".$date."'")->find();
        }
        jsondata($data);
    }
    /**
     * 获取油器类型
     */
    public function getoiltype(){
        $db = M('oiltype');
        jsondata($db->select());
    }

    /**
     * 加载车辆信息
     */
    function loadcars(){
        $data = file_get_contents(APP_PATH."/Data/cars");
        $jsondata = json_decode($data);
        jsondata($jsondata);
    }
 }
 