<?php

$judge_ment = $_GET['judge_ment'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <?php if($judge_ment == '不合格' ):?>
        <h1>不合格です</h1>
    <?php else :?>
        <h1>合格です</h1>
    <?php endif ; ?>
    <br><a href="03_form2.php">戻る</a>
</body>

</html>
