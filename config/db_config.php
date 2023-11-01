<?php

$dbHost = "localhost";
$dbUser = "phpmvc1"; 
$dbPassword = "phpmvc1"; 
$dbName = "phpmvc1"; 

// соединение с базой данных
$db = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

// проверка наличие ошибок
if ($db->connect_error) {
    die("Ошибка подключения к базе данных: " . $db->connect_error);
}
?>
