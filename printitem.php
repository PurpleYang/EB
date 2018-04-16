<?php
	include "public.php";
	$sql = "SELECT * FROM shopcart";
	$res = mysql_query($sql);
	
	while( $arr = mysql_fetch_array($res,MYSQL_ASSOC) ){//不加紫色字体部分会重复
		//如果取出数据 将数据存入到数组中
		$data[] = $arr; 
	}
	
	echo json_encode($data);
	
	
//	$arr = mysql_fetch_assoc($res);
////	echo $arr;
//	if($arr){
//		$data[] = $arr; 
////		echo 1;//表中有数据不显示购物车空
//		foreach($data as $key=>$val){
//			echo json_encode($val);
////			echo $val;
//		}
//	}
//			echo json_encode($data);
	
//	else{
////		echo 2;//显示购物车空
//	}
?>