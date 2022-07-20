<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

foreach ($subjects as $key) {
    switch ($key) {
        case '数学':
            $days = "明日";
            break;
        case '英語':
            $days = "明後日";
            break;
        case '理科':
            $days = "明々後日";
            break;
        case '社会':
            $days = "昨日";
            break;
        case '国語':
            $days = "中止";
            break;
    }
    echo "{$key}の試験は{$days}です｡" . PHP_EOL;
}
