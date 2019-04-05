<?php
$out = fopen('php://output', 'w');
$sqliteerror="エラー";
$pdo = new PDO('sqlite:bb_player.sqlite');
$results = $pdo->query("select * from player");
if (!$results) {
    die('SQL errer.'.$sqliteerror);
}
foreach($results as $values){
	fputcsv($out, array($values[0],$values[1],$values[2]));
}
$pdo = null;

fclose($out);
?>