<?php
	//参照するCSVはidで指定
	
	$FileId = $_REQUEST['id'];	
	$file = new SplFileObject('master.csv');
	foreach ($file as $line){
		$FileNumber = preg_split("/[,]+/",$line);
		
		//指定したIDでファイルが見つかったらフラグを立ててブレイク
		if ($FileId == $FileNumber[0]){
			$FileName = $FileNumber[1];
			break;
		}
	}
	
	if(is_Null($FileName)!==false){
		echo "404 File Not Found!!";
		exit;
	}

	//IDで指定したファイルをリード
	$FileName = rTrim($FileName);
	$file = new SplFileObject($FileName);
	$count = 0;
	
	foreach ($file as $line){
		$url_array[$count] = $line;
		$count++;
	}
	
	//ランダム変数でリダイレクト先を変更
	$number = mt_rand(0,$count-1);
	$location_url = 'Location: '.$url_array[$number];
	header($location_url);
?>