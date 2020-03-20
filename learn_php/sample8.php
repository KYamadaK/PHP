<?php
	print "<p>連想配列を用いる</p>";
	$result = array(
	 "Math" => 100,
	 "English" => 85,
	 "Japanese" => 95
	);
	
	foreach ($result as $title => $score){
		echo $title.$score."<br>";
	}
?>
<br>
<a href="sample9.php">次へ</a>
