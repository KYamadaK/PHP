<?php
  $csv  = array();
  $file = 'test.csv';
  $fp   = fopen($file, "r");
 
  while (($data = fgetcsv($fp, 0, ",")) !== FALSE) {
    $csv[] = $data;
  }
  fclose($fp);
  $params = array(array(':name' => '神奈川',':population' => '5000'),array(':name' => '東京', ':population' => '4000'));
  //接続設定
  $dsn = 'mysql:host=ymd;dbname=test;charset=utf8';
  $user = 'test';
  $password = 'yamada29716';
  
  //SQL定義
  //$CREATE_TABLE = "CREATE TABLE zipcode(name text,population text,created text);"
  $sql_set = "INSERT INTO citys (name, population, created) VALUES (:name, :population, now())";
  
  print("RaspberryPi DBへ接続します。</br>");
  try {
 
  // PDOインスタンスを生成
  $dbh = new PDO($dsn, $user, $password);
  print("接続成功");
// エラー（例外）が発生した時の処理を記述
  } catch (PDOException $e) {
 
  // エラーメッセージを表示させる
  echo 'データベースにアクセスできません！' . $e->getMessage();
 
  // 強制終了
  exit;
 
  }
  //ここからSQLを流し込む
  $stmt = $dbh->prepare($sql_set);
  for($i=0;$i<2;$i++){
	  $stmt->execute($params[$i]);
  }
  $dbh = null;
?>
<br>
<a href="sample10.php">次へ</a>
