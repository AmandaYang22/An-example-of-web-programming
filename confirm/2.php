<?php  
    header("content-type:text/html charset=utf-8");  
    //开启session
    session_start();
    //接收表单传递的用户名和密码
    $no=$_POST['sno'];
    $name=$_POST['sna'];
    $password=$_POST['pwd'];
    $repassword=$_POST['repwd'];
    $n1=$_POST['number1'];
    $sc1=$_POST['score1'];
    $n2=$_POST['number2'];
    $sc2=$_POST['score2'];
    $n3=$_POST['number3'];
    $sc3=$_POST['score3'];
    $n4=$_POST['number4'];
    $sc4=$_POST['score4'];
    $n5=$_POST['number5'];
    $sc5=$_POST['score5'];
    $n6=$_POST['number6'];
    $sc6=$_POST['score6'];
    $n7=$_POST['number7'];
    $sc7=$_POST['score7'];
    //判断密码是否一致
    if($password!=$repassword){
	echo"<script>alert('两次密码输入不一致，请重新输入');</script>";
	echo"<script>location='1.html'</script>";
    }else{
	  //通过php连接到mysql数据库
	  $conn=mysql_connect("localhost","root","");
	  //选择数据库
	  mysql_select_db("n152127");
	  //设置客户端和连接字符
	  mysql_query("set names utf8");
	  //通过php进行insert操作
	  $sqlinsert1="insert into Student values('{$no}','{$name}','{$password}','{$repassword}')";
	  $sqlinsert2="insert into Score values('{$n1}','{$sc1}','{$no}'),('{$n2}','{$sc2}','{$no}'),('{$n3}','{$sc3}','{$no}'),
	  ('{$n4}','{$sc4}','{$no}'),('{$n5}','{$sc5}','{$no}'),('{$n6}','{$sc6}','{$no}'),('{$n7}','{$sc7}','{$no}')";
	  
	 //通过php进行select操作
	  $sqlselect1="select * from Student order by sno";
	  $sqlselect2="select * from Score order by sno";
	 
	 //添加用户信息到数据库
	  mysql_query($sqlinsert1);
	  mysql_query($sqlinsert2);
	
	  //返回用户信息字符集
	  $result1=mysql_query($sqlselect1);
	  $result2=mysql_query($sqlselect2);
	  
	  mysql_close($conn);
	}
       header("Location:3.php");       
?>
