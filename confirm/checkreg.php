<?php
	$na=$_POST['name'];
	/*echo $na;
	$s=gettype($na);
	echo $s;*/
	$pwd=$_POST['password'];
	//echo $pwd;
	$ema=$__POST['email'];
	/*echo $_POST['email'];
	echo $ema;*/
	$shenf=$_POST['shenfen'];
//	echo $shenf;
	$mes=$_POST['message'];	
//	$mes=(string)($_POST['message']);
//	echo $mes;
	$con=mysql_connect('localhost','root','') or die('数据库连接失败'.mysql_error());
	mysql_query('set names gbk');
	mysql_select_db('n152127',$con) or die('数据库选定失败'.mysql_error());

	$sql="insert into user (username,password,email,shenfen,message) values('{$na}','{$pwd}','{$_POST['email']}','{$_POST['shenfen']}','{$mes}')";
	$ret=mysql_query($sql) or die('failed'.mysql_error());
	if($ret){
	?>
	<script language="javascript">
	//	exit('success');
			alert("注册成功");
			window.location.href="http://211.71.149.243/~n152127/12/web/login.php";
	</script>
	<?php	
	}else{
	?>
	<script language="javascript">
			alert("注册失败");
			window.location.href="http://211.71.149.243/~n152127/12/web/register.php";
	</script>
<?php
	}

?>
	
