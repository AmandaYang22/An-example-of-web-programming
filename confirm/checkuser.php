<?php
	include "conn.php";
	$name=$_POST['username'];
	$passd=$_POST['PWD'];
	//echo $name;
//	echo "\n";
	$sql=mysql_query("select * from user where username='".$name."' and password='".$passd."'");
	$result=mysql_fetch_array($sql);
	if($result!=""){
                $sid=$_POST['sid'];
		session_id($sid);
		session_start();
		$_SESSION['pass']=$sid;
?>
	<script language="javascript">
		alert("login success");
		window.location.href="index.php";
	</script>
	<?php
	 }else{
	?>
	<script language="javascript">
		alert("对不起，您输入的用户名、密码不正确，请重新输入!");
		window.location.href="http://211.71.149.243/~n152127/12/web/login.php";
	</script>
	<?php
		}
	?>
	

