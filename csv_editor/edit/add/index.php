<?php
/*
  Web上でcsvの中身にデータを追加
  array_merge
    複数の配列をマージする。渡して良いデータは配列のみ
    https://www.php.net/manual/ja/function.array-merge.php

*/

$FILE_MODE_READONLY = "a";
$file_path = "../../csv/sample.csv";
$add_data = "3,4,5";
$ref_file = fopen($file_path,$FILE_MODE_READONLY);

//排他モードでファイルを開く
flock($ref_file,LOCK_EX);

$add_data_ary = array();
$add_data_ary = array_merge($add_data_ary,str_getcsv($add_data));

//ファイルポインタを先頭位置に戻す
rewind($ref_file);

//ファイルの末尾にデータを追加する
fputcsv($ref_file,$add_data_ary);
flock($ref_file,LOCK_UN);
fclose($ref_file);

echo "データを追加しました。";

?>