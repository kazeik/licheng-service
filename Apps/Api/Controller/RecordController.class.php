<?php

namespace Api\Controller;
use Think\Controller\RestController;
/**
 * 记录控制器
 */
class RecordController extends PrivateController{
    /**
     * 记录一笔
     */
    function addRecord(){
        $date = I("date");
        $allLc = I("alllicheng");
        $oilvalue = I("oilvalue");
        $cMoney = I("currentmoney");
        $aMoney = I("allmoney");
        $oiltype = I("oiltype");
        $about = I("about");
        $uid = I('uid');
        // $db = 

        $data = Array(
            'date'=>$date,      //时间
            'uid'=>$uid,  // uid
            'mileage'=>$allLc,   //总里程
            'oiltype'=>$oiltype,   //油类型
            'oilmoney'=>$cMoney,  //油价
            'allmoney'=>$aMoney,  //当次加油总价
            'message'=>$about,   //备注
            'oilmass'=>$oilvalue   //当前加油量
        );
        $flag = M('record')->data($data)->add();
        jsondata($flag,$flag?"数据添加成功":"数据添加失败");
    }
    /**
     * 获取所有加油记录
     */
    public function getallrecordbyuser($uid){
        $db = M('record');
        $data = $db->where("uid='".$uid+"'")->select();
        jsondata($data);
    }
}