<?php
	header("content-type:text/html;charset=utf-8");
/*服务器接ajax通过get传过来的数据；(也就是说服务器接收客户端请求的数据，只是这个客户端请求的数据是通过ajax请求的)；*/
$sname=$_POST["sname"];
$sprice=$_POST["sprice"];
$simg=$_POST["simg"];
//echo $name;//echo的作用是把值返回到客户端；

//操作数据库
$db = mysql_connect("localhost","root","root");
mysql_select_db("eb",$db);
mysql_query("set names utf8");

$sql = "insert into shopcart(sname,sprice,simg,snum) values('$sname','$sprice','$simg','1')";
$res = mysql_query($sql);

$arr = mysql_fetch_array($res);



//if($arr){
//	echo 1;//数据库中存在      将1返回到客户端
//}else{
//	echo 2;//数据库中不存在    将2返回到客户端
//}
?>