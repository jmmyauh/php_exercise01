<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));

if ($num == 1) {
    $msg = '素数ではありません';
}
else {
    for ($i = 2; $i <=$num; $i++ ) {
        if ($num % $i == 0 && $num != $i){
            $msg = '素数ではありません';
            break;
        }
        else {
            $msg = '素数です';
        }
    }
}

echo $msg;
