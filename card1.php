<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input_line = fgets(STDIN);
    $N = $input_line;
    $input_line = fgets(STDIN);
    $card = explode(" ",str_replace(PHP_EOL,'',$input_line));

    sort($card);

    if ($card[0] == 0){
        $zero_flg = 1;
    }

    rsort($card);

    if ($card[0] == "x10"){
        $tenbai_flg = 1;
        $card[0] = 0;
    }

    if ($zero_flg == 1){
        rsort($card);
        $card[0] = 0;
    }
    
    $sum = 0;
    foreach($card as $num){
        $sum = $sum + $num;
        
    }
    if ($tenbai_flg == 1){
        print ($sum*10);
    }else{
        print ($sum);
    }
    
?>