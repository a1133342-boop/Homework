<?php
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] != "teacher"){
    echo "無權限！";
    exit();
}
?>

<h1>教師頁面</h1>

<?php
echo "歡迎：" . $_SESSION['user'] . "<br>";
echo "Cookie使用者：" . $_COOKIE['user'] . "<br>";
?>

<a href="logout.php">登出</a><br>
<a href="clear_cookie.php">刪除Cookie</a>
