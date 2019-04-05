<?php
	print "<p>多次元配列を用いる</p>";
	
	for($i=1;$i<11;$i++){
		for($j=11;$j>0;$j--){
			$AR[$i][$j] = $i*$j;
			print $AR[$i][$j];
			echo ",";
		}
		echo "<br>";
	}

//var_dump ($AR);	
?>
<br>
<a href="sample8.php">次へ</a>