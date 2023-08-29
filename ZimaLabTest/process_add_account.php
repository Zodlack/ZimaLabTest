<?php
include_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $company_name = $_POST['company_name'];
    $position = $_POST['position'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $phone3 = $_POST['phone3'];

    // Создаем SQL-запрос для добавления новой записи
    $sql = "INSERT INTO clients (first_name, last_name, email, company_name, position, phone1, phone2, phone3)
            VALUES ('$first_name', '$last_name', '$email', '$company_name', '$position', '$phone1', '$phone2', '$phone3')";

    // Выполняем SQL-запрос
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error adding account: " . $conn->error;
    }
}
?>
