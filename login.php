<html>
<head><title>登入</title></head>
<body>

<h2>登入系統</h2>

<form method="post" action="check.php">
帳號：<input type="text" name="user"><br><br>
密碼：<input type="password" name="pass"><br><br>

角色：
<select name="role">
    <option value="student">學生</option>
    <option value="teacher">教師</option>
    <option value="admin">管理者</option>
</select>
<br><br>

<input type="submit" value="登入">
</form>

</body>
</html>
