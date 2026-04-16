<?php
session_start();

session_destroy();


setcookie("last_product", "", time()-3600);

echo "購物車已清空<br>";
echo "<a href='menu.php'>回商品頁</a>";
?>
