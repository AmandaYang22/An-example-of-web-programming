<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>show message</title>
</head>
<body>
	<?php
	    $connector=mysql_connect("localhost","root","") or die(mysql_error());
	    $selected=mysql_select_db("n152127",$connector) or die(mysql_error());
	    $result=mysql_query("SELECT * FROM Score");
	    echo "<h1>STUDENT SCORE</h1>";
	    echo "<table width='700px' border='1px'>";
	    echo "<tr>";
  	    echo "<th>COUNT</th><th>SCORE</th><th>SNO</th>";
	    echo "</tr>";
	    $i=0;
            while($row=mysql_fetch_array($result)){
	    	echo "<tr>";
		echo "<td>{$row['count']}</td><td>{$row['score']}</td><td>{$row['sno']}</td>";
		echo "</tr>";
		$data_score[$i]=$row['score'];
		$i++;
	}
	    echo "</table>";
	   /* echo $data_count[0];
	    echo $data_count[1];
	    echo $data_count[2];*/
	 /*   $datas=array();
	    foreach($result as $row){
		    $datas[]=$row;
	    }*/
    	    mysql_close($connector);
	?>


	    <script type="text/javascript" src="Chart.js"></script>
	    <canvas id="myChart" height="300" width="300"></canvas>
	    <script>
	    	    
	    var sc1=<?php echo $data_score[0];?>;
	 //   alert(sc1);
	    var sc2=<?php echo $data_score[1];?>;
	    var sc3=<?php echo $data_score[2];?>;
            var sc4=<?php echo $data_score[3];?>;
	    var sc5=<?php echo $data_score[4];?>;
	    var sc6=<?php echo $data_score[5];?>;
	    var sc7=<?php echo $data_score[6];?>;

		
	    var ctx=document.getElementById("myChart").getContext("2d");
	    //var myNewChart=new Chart(ctx).(type:""data);
	    var data={
			labels:["1","2","3","4","5","6","7"],
			datasets:[{fillcolor:"lightblue",strokeColor:"blue",data:[sc1,sc2,sc3,sc4,sc5,sc6,sc7]
			}
		     ]
	    };
	     var myNewChart=new Chart(ctx).Line(data);
	</script>

</body>
</html>`

