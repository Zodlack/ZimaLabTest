<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Client Accounts</title>
</head>
<body>
    <h1>Client Accounts</h1>
    <a href="add_account.php">Add Account</a>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Company Name</th>
                <th>Position</th>
                <th>Phone 1</th>
                <th>Phone 2</th>
                <th>Phone 3</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once 'db.php'; // подключаем файлы, заранее проверяя не были ли они подклены ранее.
                require_once 'Account.php';// аналогично

                $accounts = Account::getAllAccounts($conn); //вызываем  статический метод getAllAccounts() из класса Account.
            

                /*Используем цикл foreach , который проходится по каждому элемнту массива $accounts
                Для каждого аккаунта в массиве он выводит соответствующую информацию в таблицу HTML.*/

                foreach ($accounts as $account) {
                    echo "<tr>";                                    //начало строки таблицы
                    echo "<td>{$account->getFirstName()}</td>";     // Выводим имя клиента,, вызывая метод getFirstName() у объекта $account.
                    echo "<td>{$account->getLastName()}</td>";      //аналогично
                    echo "<td>{$account->getEmail()}</td>";         //аналогично
                    echo "<td>{$account->getCompanyName()}</td>";   //аналогично
                    echo "<td>{$account->getPosition()}</td>";      //аналогично
                    echo "<td>{$account->getPhone1()}</td>";        //аналогично
                    echo "<td>{$account->getPhone2()}</td>";        //аналогично
                    echo "<td>{$account->getPhone3()}</td>";        //аналогично
                    echo "<td><a href='edit_account.php?id={$account->getId()}'>Edit</a></td>";  //Создается ссылка для редактирования аккаунта, с ID передаваемым в параметрах URL.
                    echo "<td><a href='delete_account.php?id={$account->getId()}'>Delete</a></td>";  // Создается ссылка для удаления аккаунта, с ID передаваемым в параметрах URL, и с подтверждением удаления через JavaScript confirm.
                    echo "</tr>";                                   // Конец строки в таблице
                }
            ?>
        </tbody>
    </table>
</body>
</html>