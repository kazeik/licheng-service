<?php

function jsondata($data,$message ='暂无数据'){
	if(empty($data)){
		$json['flag'] = '0';
		$json['message'] = $message;
	}
	else{
		$json['flag'] = '1';
		$json['message'] = '获取数据成功';
	}
	$json['data'] = $data;
	echo json_encode($json);
}
