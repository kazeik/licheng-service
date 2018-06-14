<?php
 namespace Api\Controller;
 use Think\Controller\RestController;

class PublicController extends BaseController{

    public function register(){
        
    }

    public function getoilprice(){
        $today = date('Y-m-d');
        echo $today;
        $date = I('date');
        $db = M('oil');
        $data = null;
        if(empty($date)){
            $data =  $db->where("date='".$today."'")->select();
        }else{
           echo "1111";
        }
        $this->response($data,"json");
    }
 }
 