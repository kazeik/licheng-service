<?php
 namespace Api\Controller;
 use Think\Controller\RestController;
 use Api\Common;

class PublicController extends BaseController{

    public function register(){
        
    }

    public function getoilprice(){
        $today = date('Y-m-d');
        $date = I('date');
        $db = M('oil');
        $data = null;
        if(empty($date)){
            $data =  $db->where("date='".$today."'")->find();
        }else{
            $data =  $db->where("date='".$date."'")->find();
        }
        jsondata($data);
    }

    public function getoiltype(){
        $db = M('oiltype');
        jsondata($db->select());
    }
 }
 