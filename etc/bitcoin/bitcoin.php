<?php
	//phpでビットフライヤーへアクセスする手順
	//1.必要な情報を変数ですべて用意しsha256で署名
    $fqdn = 'https://api.bitflyer.jp';
    $path = '/v1/me/getpositions/?product_code=BTC_JPY';
    $url = $fqdn.$path;
    $timeStamp = time();
    $accessKey = '';
    $accessSecret = '';
    $message = $timeStamp."GET".$path.NULL;
    $sign = hash_hmac("sha256", $message, $accessSecret);
	//1.1.アクセスヘッダーの作成
    $header = array(
            "ACCESS-KEY:$accessKey\r\n".
            "ACCESS-TIMESTAMP:$timeStamp\r\n".
            "ACCESS-SIGN:$sign\r\n".
            "Content-Type:application/json"
            );

	//2.新しいセッションの作成
    $cl = curl_init();
	//3.curl_setoptでセッションの設定
	//3.1.新しいセッションにヘッダーを作成
//    curl_setopt($cl, CURLOPT_HTTPHEADER, $header);
	//3.2.新しいセッションにURLを設定
    curl_setopt($cl, CURLOPT_URL, $url);
	//3.3.新しいセッションから情報を取得（レスポンスを得る設定）
    curl_setopt($cl, CURLOPT_RETURNTRANSFER, true );
	//4.セッションの実行、情報を取得
    $result =  curl_exec($cl);
	//5.レスポンスで返されるデータをJSONに変換
    $array =  json_decode($result, JSON_PRETTY_PRINT);
?>


<?php
	//phpでビットフライヤーへアクセスする手順
	//1.必要な情報を変数ですべて用意しsha256で署名
    $fqdn = 'https://api.bitflyer.jp';
    $path = '/v1/getmarkets';
    $url = $fqdn.$path;
    $timeStamp = time();
    $accessKey = '';
    $accessSecret = '';
    $message = $timeStamp."GET".$path.NULL;
    $sign = hash_hmac("sha256", $message, $accessSecret);
	//1.1.アクセスヘッダーの作成
    $header = array(
            "ACCESS-KEY:$accessKey\r\n".
            "ACCESS-TIMESTAMP:$timeStamp\r\n".
            "ACCESS-SIGN:$sign\r\n".
            "Content-Type:application/json"
            );

	//2.新しいセッションの作成
    $cl = curl_init();
	//3.curl_setoptでセッションの設定
	//3.1.新しいセッションにヘッダーを作成
//    curl_setopt($cl, CURLOPT_HTTPHEADER, $header);
	//3.2.新しいセッションにURLを設定
    curl_setopt($cl, CURLOPT_URL, $url);
	//3.3.新しいセッションから情報を取得（レスポンスを得る設定）
    curl_setopt($cl, CURLOPT_RETURNTRANSFER, true );
	//4.セッションの実行、情報を取得
    $result =  curl_exec($cl);
	//5.レスポンスで返されるデータをJSONに変換
    $array =  json_decode($result, JSON_PRETTY_PRINT);
    print_r($array[0]['product_code'])
?>

