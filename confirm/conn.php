<?php
	$link=mysql_connect("localhost","root","") or die ("数据库连接失败".mysql_error());
	mysql_select_db("n152127",$link);
	mysql_query("set names gb2312");
?>
