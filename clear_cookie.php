<?php
setcookie("user", "", time()-3600);

echo "Cookie已刪除<br>";
echo "<a href='login.php'>回登入頁</a>";
?>
