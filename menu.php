<html>
<body>

<h2>3C商品選購</h2>

<form method="post" action="addcart.php">

商品：
<select name="product">
    <option value="laptop">筆記型電腦 30000</option>
    <option value="desktop">桌上型電腦 25000</option>
    <option value="phone">智慧型手機 20000</option>
</select>

<br><br>

品牌：
<select name="brand">
    <option value="ASUS">ASUS</option>
    <option value="Acer">Acer</option>
    <option value="Apple">Apple</option>
</select>

<br><br>

數量：
<input type="number" name="amount" value="1" min="1">

<br><br>

<input type="submit" value="加入購物車">

</form>

<br>
<a href="cart.php">查看購物車</a>

</body>
</html>
