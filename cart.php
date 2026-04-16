<?php
session_start();

if(!isset($_SESSION['cart'])){
    echo "購物車是空的<br>";
    echo "<a href='menu.php'>回商品頁</a>";
    exit();
}

$total_all = 0;

echo "<h2>購物車內容</h2>";

foreach($_SESSION['cart'] as $item){

    $name = $item['name'];
    $price = $item['price'];
    $amount = $item['amount'];
    $brand = $item['brand'];

    $total = $price * $amount;
    $total_all += $total;

    echo "商品：$name<br>";
    echo "品牌：$brand<br>";
    echo "單價：$price<br>";
    echo "數量：$amount<br>";
    echo "小計：$total<br>";
    echo "------------------<br>";
}

echo "總金額：$total_all<br>";


if(isset($_COOKIE['last_product'])){
    echo "<br>最近商品（Cookie）：".$_COOKIE['last_product']."<br>";
}


echo "<br><a href='delete.php'>清空購物車</a>";
echo "<br><a href='menu.php'>繼續購買</a>";
?>

