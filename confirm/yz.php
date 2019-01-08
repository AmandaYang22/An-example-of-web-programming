<?php
	header('Content-Type:text/xml');
	sleep(3);
	for($i=0;$i<4;$i++){
		$index=rand(0,9);
		//echo $index;
		$vcode.=$index;
 }
//echo  $vcode;*/
echo "<?xml version=\"1.0\"?><vcode>".$vcode."</vcode>";
?>
