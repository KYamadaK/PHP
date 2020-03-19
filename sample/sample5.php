<?php
	print "<p>switch 構文</p>";
	
	for ($i = 0;$i<=100;$i++){
		switch($i){
			case 50:
			 print("半分");
			 break;
			default :
			 echo $i.",";
			 break;
		}
	}
?>
<br>
<a href="sample6.php">次へ</a>
