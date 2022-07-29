<?php

$prices = [
    'バッグ' => 1500,
    '靴' => 3000,
    '時計' => 6000,
    'ネックレス' => 9000,
    'ピアス' => 10000
];


$purchase_item = $_GET['purchase_item'];

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
    <h2>ご注文ありがとうございます</h2>
    <?php foreach ($prices as $item_key => $price):?>
        <?php if ($purchase_item == $item_key) :?>
            <h2>お支払い金額は､<?=$price?>円です</h2>
        <?php endif;?>
    <?php endforeach; ?>
    <br><a href="05_form2.php">戻る</a>
</body>

</html>
