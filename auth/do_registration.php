<?php 
require_once '../config/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE `username` = '$username'";
$stmt = mysqli_query($connect, $sql);
if(mysqli_num_rows($stmt) > 0){
    echo "Это имя уже занято.";
} else {
    $sql = "INSERT INTO `users` VALUES('', '$username', '$password')";
    $stmt = mysqli_query($connect, $sql);
    echo "Успешная регистрация!";
}
?>
