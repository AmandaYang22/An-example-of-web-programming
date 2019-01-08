<?php
	$sid="test";
	session_id($sid);
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--Bootstrap-->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<style type="text/css"> 
body{
	padding-top: 40px;
	padding-bottom:40px;
	background-color: #f5f5f5;
}

.form-signin{
	max-width: 300px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius:5px;
		-moz-border-radius:5px;
			border-radius:5px;
	-webkit-box-shadow:0 1px 2px rgba(0,0,0,.05);
		-moz-box-shadow:0 1px 2px rgba(0,0,0,.05);
			box-shadow: 0 1px 2px rgba(0,0,0,.05);
}
.form-signin .form-signin-heading,
.form-signin .checkbox{
	margin-bottom:10px;
}
.form-signin input[type="text"],
.form-signin input[type="password"]{
	font-size: 16px;
	height:auto;
	margin-bottom: 15px;
	padding:7px 9px;
}
.checknumber{
	font-family: Arial;
	font-style: italic;
	color:black;
	border:0;
	padding:5px 5px;
	width:150px;
	margin-top: 13px;
	letter-spacing: :4px;
	font-weight: bolder;
}
</style>
</head>
<title>登录</title>
	<script src="jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">
	
/*function checkusername(username){
	var str=username;
	var Expression=/^(\w){3,10}$/;
	var objExp=new RegExp(Expression);
	if(objExp.test(str) == true){
		return true;
	}else{
		return false;
	}
  } 
 */
function checkPWD(PWD){

	var str=PWD;
	var Expression=/^[0-9]{6}$/;
	//var Expression=/^([A-Za-z]){1}([A-Za-z0-9]|[._]){5,19}$/;
	var objExp=new RegExp(Expression);
	if(objExp.test(str) == true){
		return true;
	}else{
		return false;
	}
}




function veri(){
	var sourcenum="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	var siglenum="";
	var checknum="";
	var index=0;
	for(i=0;i<8;i++){
		index=(Math.random()*100)%35;
		siglenum=sourcenum.substring(index,index+1);
		checknum+=siglenum;
		i++;
	}
	document.myform.hyan.value=checknum;
 }

function check(myform){
 //	alert("check函数");
	if(myform.username.value==""){
		alert("请输入用户名!");myform.username.focus();return false;
	}
//	alert("!!!!");
//	if(!checkusername(myform.username.value)){
//		alert("0000");
//		alert("输入用户名不合法");myform.username.focus();return false;
//	}
//	alert("1111");
	if(myform.PWD.value==""){
	//	alert("2222");
		alert("请输入密码!");myform.PWD.focus();return false;
	}
	//alert("3333");
/*	if(!checkPWD(myform.PWD.value)){
		alert("输入的密码不合法!");myform.PWD.focus();return false;
}*/
	if(myform.PWDI.value==""){
		alert("输入确认密码!");myform.PWDI.focus();return false;
	}
	if(myform.PWDI.value!=myform.PWD.value){
		alert("两次输入的密码不一致，重新输入!");myform.PWD.focus();return;
	}
	if(myform.yanz.value==""){
	//	alert("#####");
		alert("请输入验证码!"); myform.yanz.focus();return false;
	}
	//alert("验证码");
	if(myform.yanz.value!=myform.hyan.value){
	//	alert("4444");
		alert("验证码输入有误!");myform.yanz.focus();return false;
	}
	//myform.submit();
}


</script>
<body onload="veri()">
  <div class="container">
	<form class="form-signin"name="myform" method="post" action="confirm/checkuser.php">
		<h2 class="form-signin-heading">Please sign in</h2>
		<input type="hidden" name="sid" value="<?php echo session_id();?>">
		<input type="text" class="input-block-level" placeholder="Username" name="username" id="username">
		<input type="password" class="input-block-level" placeholder="Password" name="PWD" id="PWD">
		<input type="text" class="input-block-level" placeholder="Vericode" name="yanz" id="yanz">
		<input type="text" class="checknumber" name="hyan" id="hyan" readonly style="height:28px">
		<input type="button" class="btn btn-large btn-primary" value="刷新"onClick="veri();">
		<button class="btn btn-large btn-primary" type="submit"  onClick="check(myform);">登录</button>
		<input type="button" class="btn btn-large btn-primary" value="注册" onClick="window.location.href='register.php'">
		
	</form>
  </div>
 </body>
</html>
