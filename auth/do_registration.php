<?php 
require_once '../config/connect.php';
// $sql = "SELECT GROUP_CONCAT(username) AS column_array FROM `users`";
// $stmt = mysqli_query($connect, $sql);
// $stmt = mysqli_fetch_all($stmt);

$username = $_POST['username'];
$password = $_POST['password'];
echo $username, '<br>';
echo $password, '<br>';

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
<pre>
    <?php 
    // print_r($stmt);
    // print_r($_POST);
    ?>
</pre>