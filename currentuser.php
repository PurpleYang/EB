<?php
//$user=$_COOKIE['username'];//取cookie中的值
//$iflogin=$_COOKIE['iflogin'];
//if($iflogin&&$user){//一小时之内不用重复登录
    if($_GET['del']){ //清除cookie
        setcookie('username','',time()-3600);
        setcookie('password','',time()-3600); 
        setcookie('loginstatus','',time()-3600); 
        echo '<script>window.location.href="index.html";</script>';
    }
//  echo $user.' welcome, <a href="login.php?del=1">log out</a>';//登录成功的状态
//}
?>