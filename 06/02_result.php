<?php

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo htmlspecialchars("私の名前は{$_POST['name']}です" , ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>2.フォームの作成</title>
</head>
<body>
    <br><a href="02_form.php">戻る</a>
</body>
</html>
