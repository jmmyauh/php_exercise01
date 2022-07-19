<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));


for ($i = 2; $i <=$num; $i++ ) {
    if ($num % $i == 0 && $num != $i){
        $msg = '素数ではありません';
        break;
    }
    elseif($i == 1){
        $msg = '素数ではありません';
    }
    else {
        $msg = '素数です';
    }
}

echo $msg;
