<?php
	$con=mysql_connect('localhost','root','');
	$db_selected=mysql_select_db('n152127',$con);
	mysql_query("set names gbk");
	$name=$_GET['id'];
	//echo $name;
	//$sql="select * from user where username='$name'";
	$sql="select * from user where  username='".$name."'";
	$result=mysql_query($sql,$con);
	$data=mysql_num_rows($result);
	//echo "data:";
	//echo $data;
	if($data){
		echo "<font color=red>�û����Ѵ���</font>";

	}else{
		echo "<font color=green>�û�������ʹ��</font>";
	}
?>