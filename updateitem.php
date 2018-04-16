<?php  
include 'public.php';  
//接受shopcart.php的数据  
//if ($_POST) {  
    $id = $_POST['id'];  
    $num = $_POST['num'];  
//  $retureInfo = array(  
//      'status' => 0,  
//      'info' => '修改商品数量失败'  
//  );  
    $sql = "UPDATE `shopcart` SET `snum` = $num WHERE `shopcart`.`sid` = $id";
    mysql_query($sql);  
    $row = mysql_affected_rows();  
//  if ($row == 1) {  
//      $retureInfo['status'] = 1;  
//      $retureInfo['info'] = '修改商品数量成功';  
//  }  
//  echo json_encode($retureInfo);  
//}
?>