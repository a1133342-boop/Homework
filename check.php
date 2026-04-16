<?php
session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];
$role = $_POST['role'];


if($pass == "1234"){

    $_SESSION['user'] = $user;
    $_SESSION['role'] = $role;

    
    setcookie("user", $user, time()+3600);

    
    if($role == "student"){
        header("Location: student.php");
    }elseif($role == "teacher"){
        header("Location: teacher.php");
    }else{
        header("Location: admin.php");
    }

}else{
    echo "登入失敗";
}
?>
