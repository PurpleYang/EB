<?php
	//设置头文件
	header("content-type:text/html;charset=utf-8");
	//操作数据库
	//1--设置数据源
	$db = mysql_connect("localhost","root","root"); //返回数据源   参数： 主机名称    数据源登录用户  名root   密码
	
	//2--连接数据源(选择数据库)
	mysql_select_db("eb",$db); // 参数 ： 数据库名称    $db
	
	//3--设置字符编码 （防止乱码）
	mysql_query("set names utf8");
?>