<?php
    $fqdn = 'https://api.bitflyer.jp';
    $path = '/v1/me/sendchildorder';
    $url = $fqdn.$path;
    $timeStamp = time();
    $accessKey = 'アクセスキー';
    $accessSecret = 'アクセスシークレット';
    $query = array(
        "product_code" => "FX_BTC_JPY",
        "child_order_type" => "LIMIT",
        "side" => "BUY",
        "price" => 427250,
        "size" => 0.01
        );
    $json = json_encode($query);
    $message = $timeStamp.'POST'.$path.$json;
    $sign = hash_hmac("sha256", $message, $accessSecret);
    $cl = curl_init();
    $option = array(
        CURLOPT_HTTPHEADER => array(
            "ACCESS-KEY:$accessKey",
            "ACCESS-TIMESTAMP:$timeStamp",
            "ACCESS-SIGN:$sign",
            "Content-Type:application/json",
            ),
        CURLOPT_POST => true,
        );
    curl_setopt($cl, CURLOPT_URL, $url);
    curl_setopt($cl, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($cl, CURLOPT_RETURNTRANSFER, true );
    curl_setopt($cl, CURLOPT_POSTFIELDS, $json);
    curl_setopt_array($cl, $option);
    $result =  curl_exec($cl);
    $array = json_decode($result, JSON_PRETTY_PRINT);
    echo $result;
?>