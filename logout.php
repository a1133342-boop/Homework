<?php
session_start();
session_destroy();

echo "已登出<br>";
echo "<a href='login.php'>回登入頁</a>";
?>
