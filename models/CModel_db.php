<?php
/*
// к настройкам
require("db_config.php");


$query = "SELECT * FROM ";// таблица
$result = $db->query($query);

if ($result) {
    while ($row = $result->fetch_assoc()) {
 // обрабтка рез
        echo $row[""]; //название_колонки
    }
    $result->free();
} else {
    echo "Ошибка выполнения запроса: " . $db->error;
}

// закрытие соединения
$db->close();
?>

