<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ע��</title>


<link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="confirm/jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/jquery.js"></script>
<script src="bootstrap/ajax.js"></script>
<style type="text/css">
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
.select-form{
    width:207.8px;
    margin-top:2px;
}
</style>
</head>
<script type="text/javascript">
function passSelect(){
    var sf=document.getElementById("shenfen");
    var index1=sf.selectedIndex;
    var value1=sf.options[index1].value;

    xmlHttp=GetXmlHttpObject()
    if (xmlHttp==null)
     {
     alert ("Browser does not support HTTP Request")
     return
     }
    var url="confirm/checkreg.php"
    url=url+"?shenfen="+sf;
    /*alert("url");
    alert(url);*/
    url=url+"&sid="+Math.random()
    xmlHttp.onreadystatechange=stateChanged 
    xmlHttp.open("GET",url,true)
    xmlHttp.send(null)
    }

    

   /* function stateChanged() 
    { 
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
     document.getElementById("tableHint").innerHTML=xmlHttp.responseText 
     } 
    }
*/
    function GetXmlHttpObject()
    {
    var xmlHttp=null;
    try
     {
     // Firefox, Opera 8.0+, Safari
     xmlHttp=new XMLHttpRequest();
     }
    catch (e)
     {
     //Internet Explorer
     try
      {
      xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
      }
     catch (e)
      {
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
     }
    return xmlHttp;
    }




function checkName(name){
//	alert("lala");	
//	alert("myform.name.value");
//	alert(myform.name.value);
	if(myform.name.value=="")
	{
	    alert("������ע������");
	    myform.name.focus();
	    return false;
	}			
	else{	
		var userName=document.getElementById("name").value;
		//	var Expression=/^(\w){5,10}$/;
		var Expression=/^[\u4e00-\u9fa5]{2,7}$/;
	//	var Expression=/^\w+$/;
		var objExp=new RegExp(Expression);			   
		if(objExp.test(userName)==false)
		{	
			alert("ע������2-7������");
			myform.name.focus();	
		}
		else
		{
		// JavaScript Document
		 var XHR;    //����һ��ȫ�ֶ���
		 function createXHR(){              //�������ǵô���һ��XMLHttpRequest����
		 if(window.ActiveXObject){//IE�ĵͰ汾ϵ��
			 XHR=new ActiveXObject('Microsoft.XMLHTTP');//֮ǰIE¢��������������г���û��ѭW3C��׼�����Ծ����������뵫IE6֮��ʼ�����Ĺ�
		 }else if(window.XMLHttpRequest){//��IEϵ�е��������������IE7 IE8
      			 XHR=new XMLHttpRequest();
                 }
                 }
		 function checkname(){
                         var username=myform.name.value;
			 createXHR();    
//			 alert(username);
                         XHR.open("GET","checkname.php?id="+username,true);//true:��ʾ�첽���䣬������send()�������ؽ����������ajax�ĺ���˼��
                         XHR.onreadystatechange=byhongfei;//��״̬�ı�ʱ������byhongfei��������������������������ⶨ��
                         XHR.send(null);
                 }
	         function byhongfei(){
			if(XHR.readyState == 4){//����Ajax��������еķ���������
      				if(XHR.status == 200){    
	                                 var textHTML=XHR.responseText;            
	                                 document.getElementById('name_status').innerHTML=textHTML;
	                                 }
	                 }
		}
		 createXHR();
		 checkname();
		 byhongfei();
	        }
	}
} 
function checkPassword(password){
	if(myform.password.value==""){
	  	alert("���������룡");
  		myform.password.focus();
		return false;
	}	
	/*alert("����");
	alert(password);
	alert("myform.password.value");*/
//	alert(myform.password.value);
	var str=myform.password.value;
	var Expression=/^[a-zA-Z](\w){5,10}$/;
	var objExp=new RegExp(Expression);
	if(objExp.test(str) == false){
		 alert("��������ĸ��ͷ��������6-10֮�䣬ֻ�ܰ����ַ������ֺ��»���");
		 myform.password.focus(); 
	}
}
function checkRepassword(repassword){
	var passwd1=document.getElementById("password").value;
	var passwd2=document.getElementById("repassword").value;
//	alert("passwd1");
//	alert(passwd1);
///	alert("passwd2");
//	alert(passwd2);
	if(passwd2==""){
		alert("���ٴ���������");
		myform.repassword.focus();
		return false;
	}
	//alert(passwd2);
	if(passwd2!=passwd1){
	/*	alert("2passwd1");
		alert(passwd1);
		alert("2passwd2");
		alert(passwd2);*/
		alert("�������벻һ��");
		myform.repassword.focus();
	}
}

function checkEmail(email){
	if(myform.email.value==""){
		alert("����������");
		myform.email.focus();
	        return false;						
	}       
	var str=myform.email.value;
//	alert(str);
	var Expression=/^[A-Za-z\d]+([-_.][A-Za-z\d]+)*@([A-Za-z\d]+[-.])+[A-Za-z\d]{2,4}$/;
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==false){
		alert("��������ȷ�������ַ");
		myform.email.focus();
	}
}
</script>
<body>
  <div class="container">			
	<form class="form-signin" name="myform"   action="confirm/checkreg.php" method="post">
		<div class="col-10">
			<h2 class="form-signin-heading">Please sign in</h2>
		</div>	
		<div class="col-10">		          	
			<input type="text" class="input-block-level" name="name" id="name" placeholder="name" onchange="checkName(name);"><span id="name_status"></span>
		</div>              
		<div class="col-10">
		        <input type="password" class="input-block-level" name="password" id="password" placeholder="password" onchange="checkPassword(password);">
		</div>
		<div class="col-10">
		        <input type="password" class="input-block-level" name="repassword" id="repassword" placeholder="repassword" onchange="checkRepassword(repassword);">
		</div>
		<div class="col-10">
		        <input type="email" class="input-block-level" name="email" id="email" placeholder="email" onchange="checkEmail(email);">
		</div>
		<div class="col-10">
			<select name="type" class="select-form" id="shenfen" onchange="passSelect()">
				  <option value="student">student</option>
				  <option value="teacher">teacher</option>
			</select>
		</div>
		<div class="col-10">
		        <label for="message" class="col-2 col-form-label">�����˺�˵�� *</label>
		           <textarea rows="8" cols="50" class="form-control" name="message" id="message" placeholder=""></textarea>
		</div>
		 <div class="col-10">
		         <div class="checkbox">
		             <label>
		                  <input type="checkbox"> I agree
		             </label>
		         </div>		            
		  </div>
		  <div class="col-10">
		            <input type="submit" value="ע��" class="btn btn-success pull-left">
		   </div>
		</form>		      
	</div>
</body>
</html>