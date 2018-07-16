<?php
return array(
	//'配置项'=>'配置值'
	'MODULE_DENY_LIST'      =>  array('Common','Runtime'), // 禁止访问的模块列表
	'MULTI_MODULE'          =>  true, // 是否允许多模块 如果为false 则必须设置 DEFAULT_MODULE

	//项目分组设定
	'MODULE_ALLOW_LIST' =>array('Home','Api','Admin'), 
	//默认分组
	'DEFAULT_MODULE' =>'Api',

	'URL_CASE_INSENSITIVE'  =>  true,  //URL地址不区分大小写
	'URL_MODEL'	=> 2,
	// 'ADMIN_AUTH_KEY'    => 'admin',
	// 'USER_AUTH_ON'      => '1',
	// 'USER_AUTH_TYPE'    => '1',//2为即时验证模式，别的数字为登陆验证
	// 调试下关闭缓存
	'TMPL_CACHE_ON' => false,
	'TMPL_CACHE_ON' => false,
	'URL_PARAMS_BIND'       =>  true ,// URL变量绑定到操作方法作为参数

	// 数据库的配置项
	//数据库配置信息
	'DB_TYPE'   => 'mysqli', // 数据库类型
	'DB_HOST'   => '120.78.93.179', // 线上服务器地址
	// 'DB_HOST'   => 'localhost', // 本地服务器地址
	'DB_NAME'   => 'lichengs', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'a50aQrgkLwq9cl9y9', // 线上密码
	// 'DB_PWD'    => 'root', // 本地密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'lc_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
);