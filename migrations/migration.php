<?php 
require_once '../config/connect.php';

$sql = file_get_contents('0000_base.sql');
$queries = explode(";", $sql);

// Наверное стоило просто делать через source
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

echo "База данных и/или таблица успешно созданы.";


$connect->close();
?>