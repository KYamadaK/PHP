<?php
/*
  Web上でcsvの中身を追加

*/

$FILE_MODE_READONLY = "r";
$file_path = "../../csv/sample.csv";

$ref_file = fopen($file_path,$FILE_MODE_READONLY);

while(($data_line = fgets($ref_file))!== false){
  echo $data_line;
}

fclose($ref_file);

?>