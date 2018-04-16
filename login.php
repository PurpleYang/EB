<?php
	include "public.php";
	//接收数据
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	//编写sql语句
	$sql = "select * from users where username = '$username'";
	
	//执行sql语句
	$res =  mysql_query($sql);//执行select操作 返回一个结果集
	
	//取出结果集中的数据
	$arr = mysql_fetch_array($res);//取出结果集中的一行数据     返回一个数组 
	
	//print_r($arr3);
	if( $arr ){
		//如果用户名存在     判断用户输入的密码和数据库中的密码是否相等  如果相等登录成功，否则 提示密码错误
		if( $password == $arr["password"]){
             setcookie("username",$username,time()+3600);//保存用户名,一小时
             setcookie("password",$password,time()+3600);//保存密码,一小时
             setcookie("loginstatus",1,time()+3600);//保存登录状态,一小时
			 echo "<script>alert('登录成功');location.href='index.html';</script>";
		}else{
			echo "<script>alert('密码出错');location.href='login.html';</script>";
		}
		
	}else{
		//如果用户名不存在  提示 用户不存在，不用判断密码
		echo "<script>alert('用户名不存在');location.href='login.html';</script>";
	}
	
?>