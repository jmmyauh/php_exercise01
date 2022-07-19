<?php

// 変数を用意
$msg = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['name'];
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>2.フォームの作成</title>
</head>

<body>
    <form action="02_result.php" method="POST">
        <div>
            <label for="">名前</label>
            <input type="text" name="name">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
</body>

</html>
