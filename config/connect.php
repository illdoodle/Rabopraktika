<?php
$connect = mysqli_connect('localhost', 'root', '', 'site');
$connect->set_charset("utf8");
if ($connect->connect_error) {
    die("Ошибка подключения: " . $connect->connect_error);
}
?>