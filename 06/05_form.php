<?php

// 変数を用意
$msg = '';
$fmsg = '';
$smsg = '';
$tmsg = '';
$err_msg = '';
// $total_number = ($fmsg + $smsg + $tmsg);

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fmsg = $_POST['first_age'];
    $smsg = $_POST['second_age'];
    $tmsg = $_POST['third_age'];

    if ($fmsg == '' || $smsg == '' || $tmsg == ''){
        $err_msg = '全てに数字を入力してください';
    }
    else {
        $msg = '合計値は ' . $fmsg + $smsg + $tmsg . ' です';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>5.フォームの作成</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <form action="" method="POST">
        <div>
            <?php if (!empty($err_msg)): ?>
                <ul>
                    <li><?=$err_msg?></li>
                </ul>
            <?php endif; ?>
            <label for="">1つ目の数字</label><br>
            <input type="text" name="first_age"><br>
            <label for="">2つ目の数字</label><br>
            <input type="text" name="second_age"><br>
            <label for="">3つ目の数字</label><br>
            <input type="text" name="third_age">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p><?=htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></p>
</body>

</html>
