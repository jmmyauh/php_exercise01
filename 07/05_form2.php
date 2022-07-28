<?php

// 変数を用意
$name = '';
$tel = '';
$email = ''; 
$item_key = '';
$key = '';
$err_msgs = [];
$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

$item_key = $_POST['items'];

foreach ($items as $keys) {
    if ($item_key == $keys) {
        $key = '購入するもの:   ' . $keys;
    }
}


// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    if (empty($name)) {
        $err_msgs[] = '氏名を入力してください';
    }

    if (empty($tel)) {
        $err_msgs[] = '電話番号を入力して下さい';
    }
    if (empty($email)) {
        $err_msgs[] = 'メールアドレスを入力して下さい';
    }
    else {
        header('Location: 05_confirm.php?purchase_item=' . $item_key);
        exit;
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
    <h2>個人情報を入力してください</h2>
    <form action="" method="POST">
        <div>
            <?php if (!empty($err_msgs)): ?>
                <h1>エラーメッセージ</h1>
                <ul>
                    <?php foreach ($err_msgs as $err_msg): ?>
                        <li><?=$err_msg?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <label for="">氏名</label><br>
            <input type="text" name="name"><br>
            <label for="">電話番号</label><br>
            <input type="text" name="tel"><br>
            <label for="">メールアドレス</label><br>
            <input type="text" name="email">
        </div>
        <div>
            <h2>購入するものを選択してください</h2>
                <select name="items">
                    <?php 
                    foreach ($items as $keys ) {
                    print('<option value="'. $keys.'">' . $keys.'</option>');
                    }?>
                </select>
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
</body>

</html>
