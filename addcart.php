<?php
session_start();

$product = $_POST['product'];
$brand = $_POST['brand'];
$amount = $_POST['amount'];


switch($product){
    case "laptop":
        $pname = "筆記型電腦";
        $price = 30000;
        break;
    case "desktop":
        $pname = "桌上型電腦";
        $price = 25000;
        break;
    case "phone":
        $pname = "智慧型手機";
        $price = 20000;
        break;
}


$_SESSION['pname'] = $pname;
$_SESSION['price'] = $price;
$_SESSION['amount'] = $amount;
$_SESSION['brand'] = $brand;

setcookie("last_product", $pname, time()+3600);

header("Location: cart.php");
?>
