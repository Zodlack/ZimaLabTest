<?php
    require_once 'db.php'; // Подключаем файл с подключением к базе данных
    require_once 'Account.php'; // Подключаем файл с определением класса Account

    if (isset($_GET["id"])) {       
        $accountId = $_GET["id"];                                           // Получаем ID аккаунта из параметра URL

        $account = Account::getAccountById($conn, $accountId);                     // Получаем объект аккаунта по ID

        if ($account) {
            // Удаляем аккаунт из базы данных
            if (Account::deleteAccount($conn, $accountId)) {
                echo "Аккаунт {$account->getFirstName()} {$account->getLastName()} успешно удален.";
            } else {
                echo "Ошибка при удалении аккаунта.";
            }
        } else {
            echo "Аккаунт не найден.";
        }
        echo "<br>";
        echo "<a href='index.php'>На главную</a>";
    }
?>
