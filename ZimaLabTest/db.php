<?php
    $host = ""; // адрес хоста базы данных
    $username = ""; // имя пользователя базы данных
    $password = ""; // пароль от базы данных
    $dbName = ""; // имя базы данных

    $conn = new mysqli($host, $username, $password, $dbName); // Создание подключения к базе данных

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); // В случае ошибки подключения, выводим сообщение об ошибке и завершаем выполнение скрипта
    }
?>
