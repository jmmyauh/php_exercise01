<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$calcuration = $_GET['operator'];

if ($calcuration == 'addition') {
    $mark = ' + ';
    $answer = $num1 + $num2;
} elseif ($calcuration == 'subtraction') {
    $mark = ' - ';
    $answer = $num1 - $num2;
} elseif ($calcuration == 'multiplication') {
    $mark = ' * ';
    $answer = $num1 * $num2;
} elseif ($calcuration == 'division') {
    $mark = ' / ';
    $answer = $num1 / $num2;
} else {
    echo '正しい演算子を指定して下さい';
}

echo $num1 . $mark . $num2 . ' = ' . $answer;
