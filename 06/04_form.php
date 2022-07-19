<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$calcuration = $_GET['operator'];

if ($calcuration == 'addition') {
    echo $num1 . ' + ' . $num2 .' = ' . $num1 + $num2;
}
elseif ($calcuration == 'subtraction') {
    echo $num1 . ' - ' . $num2 .' = ' . $num1 - $num2;
}
elseif ($calcuration == 'multiplication') {
    echo $num1 . ' * ' . $num2 .' = ' . $num1 * $num2;
}
elseif ($calcuration == 'division') {
    echo $num1 . ' / ' . $num2 .' = ' . $num1 / $num2;
}
else {
    echo '正しい演算子を指定して下さい';
}
