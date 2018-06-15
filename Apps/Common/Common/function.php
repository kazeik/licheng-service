<?php

function jsondata($data,$message ='暂无数据'){
	if(empty($data)){
		$json['flag'] = '0';
	}
	else{
		$json['flag'] = '1';
		
	}
	$json['message'] = $message;
	$json['data'] = $data;
	echo json_encode($json);
}
