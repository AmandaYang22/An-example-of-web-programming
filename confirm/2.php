<?php  
    header("content-type:text/html charset=utf-8");  
    //����session
    session_start();
    //���ձ����ݵ��û���������
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
    //�ж������Ƿ�һ��
    if($password!=$repassword){
	echo"<script>alert('�����������벻һ�£�����������');</script>";
	echo"<script>location='1.html'</script>";
    }else{
	  //ͨ��php���ӵ�mysql���ݿ�
	  $conn=mysql_connect("localhost","root","");
	  //ѡ�����ݿ�
	  mysql_select_db("n152127");
	  //���ÿͻ��˺������ַ�
	  mysql_query("set names utf8");
	  //ͨ��php����insert����
	  $sqlinsert1="insert into Student values('{$no}','{$name}','{$password}','{$repassword}')";
	  $sqlinsert2="insert into Score values('{$n1}','{$sc1}','{$no}'),('{$n2}','{$sc2}','{$no}'),('{$n3}','{$sc3}','{$no}'),
	  ('{$n4}','{$sc4}','{$no}'),('{$n5}','{$sc5}','{$no}'),('{$n6}','{$sc6}','{$no}'),('{$n7}','{$sc7}','{$no}')";
	  
	 //ͨ��php����select����
	  $sqlselect1="select * from Student order by sno";
	  $sqlselect2="select * from Score order by sno";
	 
	 //����û���Ϣ�����ݿ�
	  mysql_query($sqlinsert1);
	  mysql_query($sqlinsert2);
	
	  //�����û���Ϣ�ַ���
	  $result1=mysql_query($sqlselect1);
	  $result2=mysql_query($sqlselect2);
	  
	  mysql_close($conn);
	}
       header("Location:3.php");       
?>
