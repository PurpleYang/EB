<?php
	//导入 公共文件代码
	include "public.php";
	//接收客户端请求数据
	$username1 = $_POST["username1"];
	$password1 = $_POST["password1"];
	$email = $_POST["email"];
	
	//4--编写sql语句
	$sql = "insert into users(username,password,email) values('$username1','$password1','$email')";
 
	//5--执行sql语句      
	$row = mysql_query($sql);//执行  insert  delete  update操作时 返回的是受影响的行数
	
	//判断  日过$row  是1  提示用户 注册成功   否则失败
	if( $row ){
		echo "<script>alert('注册成功');location.href='login.html';</script>";
	}else{
		echo "<script>alert('注册失败');location.href='register.html';</script>";
	}
?>