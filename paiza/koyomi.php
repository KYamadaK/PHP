<?php
    // �����̓��ӂȌ����
    // Let's �`�������W�I�I

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