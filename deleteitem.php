<?php
	include "public.php";
	
	//接收客户端传递的id
	$id = $_POST["id"];
	
	$sql = "DELETE FROM `shopcart` WHERE sid = $id";
	
	$row = mysql_query($sql);
//	echo $id;
	if( $row ){
		echo 1;//删除成功
	}else{
		echo 2;//删除失败
	}
?>