<?php

function jsondata($data,$message){
	if(empty($data)){
		$json['flag'] = '0';
		$json['message'] = $message;
	}
	else{
		$json['flag'] = '1';
		$json['message'] = strlen($message)==0?"数据加载成功":$message;
	}
	
	$json['data'] = $data;
	echo json_encode($json);
}
