<?php
session_start();

if(!isset($_SESSION['pname'])){
    echo "目前沒有商品<br>";
    echo "<a href='menu.php'>回商品頁</a>";
    exit();
}

$name = $_SESSION['pname'];
$price = $_SESSION['price'];
$amount = $_SESSION['amount'];
$brand = $_SESSION['brand'];

$total = $price * $amount;
?>

<h2>購物車內容</h2>

商品名稱：<?php echo $name; ?><br>
品牌：<?php echo $brand; ?><br>
單價：<?php echo $price; ?><br>
數量：<?php echo $amount; ?><br>
總金額：<?php echo $total; ?><br>

<br>
最近瀏覽（Cookie）：<?php echo $_COOKIE['last_product']; ?><br>

<br>
<a href="delete.php">清空購物車</a><br>
<a href="menu.php">繼續購買</a>
