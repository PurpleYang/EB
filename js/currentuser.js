//显示当前登录用户
//$(document).ready(function(){
//            //使用某个控件或者Hidden控件后台赋值是否已登录
//            if($("").val()=="Logined"){
//                $("#currentuser").innerHTML="欢迎您，xxx";
//            }
//        });
var userstatus=getcookie("user");//取cookie中的值
var loginstatus=getCookie("loginstatus");
if(loginstatus&&userstatus){//一小时之内不用重复登录
    if($_GET['del']){ //清除cookie
        setcookie('username','',time()-3600);
        setcookie('password','',time()-3600); 
        setcookie('loginstatus','',time()-3600); 
        window.location.href="index.html";
    }
//  $("#currentuser").innerHTML="'欢迎您''.$userstatus.''<a href="index.html?del=1">登出</a>'";//登录成功的状态
$("#currentuser").html("huanyingni");
//  echo $user.' welcome, <a href="login.php?del=1">log out</a>';
   }