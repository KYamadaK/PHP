<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input_line = trim(fgets(STDIN));
    $input_line = $input_line. "," ;
    $input_line = $input_line.trim(fgets(STDIN));
    
    $s = explode(",", $input_line);
    
    if(strcmp($s[0],"H")==0){
        $sei = intval($s[1]) + 1988;
        echo $sei . "\n";
    }else if(strcmp($s[0],"S") == 0){
        $sei = intval($s[1]) + 1925;
        echo $sei . "\n";
    }    
    
?>