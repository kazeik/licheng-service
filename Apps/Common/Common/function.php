<?php

function jsondata($data,$message ='获取数据成功'){
	if(empty($data)){
		$json['flag'] = '0';
		$json['message'] = '暂无数据';
	}
	else{
		$json['flag'] = '1';
		$json['message'] = $message;
	}
	
	$json['data'] = $data;
	echo json_encode($json);
}
