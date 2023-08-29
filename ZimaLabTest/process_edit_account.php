<?php
include_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $account_id = $_POST['account_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $company_name = $_POST['company_name'];
    $position = $_POST['position'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $phone3 = $_POST['phone3'];

    // Создаем SQL-запрос для обновления записи
    $sql = "UPDATE clients SET first_name='$first_name', last_name='$last_name', email='$email', company_name='$company_name',
            position='$position', phone1='$phone1', phone2='$phone2', phone3='$phone3' WHERE id=$account_id";

    // Выполняем SQL-запрос
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating account: " . $conn->error;
    }
}
?>
