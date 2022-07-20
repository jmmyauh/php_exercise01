<?php

// 変数を用意
$msg = '';
$err_msg = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['age'];

    if (empty($msg)) {
        $err_msg = '名前を入力してください';
    }
    else {
        $msg = '私は' . $_POST['age'] . '歳です';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>3.フォームの作成</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <?php if (!empty($err_msg)): ?>
                <ul>
                    <li><?=$err_msg?></li>
                </ul>
            <?php endif; ?>
            <label for="">年齢</label><br>
            <input type="text" name="age">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p><?=htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></p>
</body>

</html>
