<?php 
require_once '../config/connect.php';

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
$stmt = mysqli_query($connect, $sql);
if(mysqli_num_rows($stmt) > 0){
    $_SESSION['username'] = $username;
    echo 'Успешная авторизация!', '<br>';
    ?>
    <a href="../index.php">На Заглавную</a>
    <?php
}else{
    echo 'Логин или пароль неверны.', '<br>';
    ?>
    <a href="auth.php">Попробовать Снова</a>
    <?php
}
?>
