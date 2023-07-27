<?php 
include '../config/connect.php';

if ($connect->connect_error) {
    die("Ошибка подключения: " . $connect->connect_error);
}

$sql = file_get_contents('0000_base.sql');
$queries = explode(";", $sql);
$queries = explode(";", $sql);

// Выполняем каждый запрос
foreach ($queries as $query) { 
    // Игнорируем пустые строки
    $query = trim($query);
    if (empty($query)) {
        continue;
    }

    // Выполняем запрос
    if ($connect->query($query) === TRUE) {
        echo "Запрос успешно выполнен: $query<br>";
    } else {
        echo "Ошибка при выполнении запроса: " . $connect->error . "<br>";
    }
}

echo "База данных и таблица успешно созданы.";


$connect->close();
?>