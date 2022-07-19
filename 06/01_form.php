<?php

// 変数を用意
$msg = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['age'];
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>1.フォームの作成</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <label for="">年齢</label><br>
            <input type="text" name="age">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <!-- <p><?php echo "私は{$msg}歳です"; ?></p> -->
    <p><?=htmlspecialchars("私は{$msg}歳です", ENT_QUOTES, 'UTF-8') ?></p>
</body>

</html>
