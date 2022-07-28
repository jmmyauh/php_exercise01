<?php 
$date = date('今日は､Y年m月d日');
$week = ['日', '月', '火', '水', '木', '金', '土'];
$weekday =date('w');
$msg = $date . $week[$weekday] . '曜日です';
echo $msg; 
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($_POST['ok'])):?>
        <h1><?=$msg?></h1>
        <a href="05_main.php">戻る</a>
<?php endif; ?>
</body>
</html>
