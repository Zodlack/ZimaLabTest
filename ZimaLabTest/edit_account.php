<!DOCTYPE html>
<html lang="ru"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Редактирование аккаунта</title>
</head>
<body>
    <h1>Редактирование аккаунта</h1> 
    <?php
        include_once 'Account.php';
        include_once 'db.php';

        // Проверяем, получен ли идентификатор аккаунта из GET-параметра
        if (isset($_GET['id'])) {
            $accountId = $_GET['id'];
            // Используем метод getAccountById() для получения данных аккаунта
            $account = Account::getAccountById($conn, $accountId);

            if ($account) {
                ?>
                <form action="process_edit_account.php" method="post">
                    <input type="hidden" name="account_id" value="<?php echo $accountId; ?>">

                    <label for="first_name">Имя:</label>
                    <input type="text" id="first_name" name="first_name" value="<?php echo $account->getFirstName(); ?>" required><br>

                    <label for="last_name">Фамилия:</label>
                    <input type="text" id="last_name" name="last_name" value="<?php echo $account->getLastName(); ?>" required><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $account->getEmail(); ?>" required><br>

                    <label for="company_name">Название компании:</label>
                    <input type="text" id="company_name" name="company_name" value="<?php echo $account->getCompanyName(); ?>"><br>

                    <label for="position">Должность:</label>
                    <input type="text" id="position" name="position" value="<?php echo $account->getPosition(); ?>"><br>

                    <label for="phone1">Телефон 1:</label>
                    <input type="text" id="phone1" name="phone1" value="<?php echo $account->getPhone1(); ?>"><br>

                    <label for="phone2">Телефон 2:</label>
                    <input type="text" id="phone2" name="phone2" value="<?php echo $account->getPhone2(); ?>"><br>

                    <label for="phone3">Телефон 3:</label>
                    <input type="text" id="phone3" name="phone3" value="<?php echo $account->getPhone3(); ?>"><br>

                    <button type="submit">Сохранить изменения</button>
                </form>
            <?php
            } else {
                echo "Аккаунт не найден.";
            }
        } else {
            echo "Не указан идентификатор аккаунта.";
        }
    ?>

    <!-- Этот код создает форму для редактирования существующего аккаунта.
     Каждое поле имеет свой id для привязки к соответствующим меткам <label>,
     а также name, который будет использоваться при отправке данных на сервер. 
     Значения полей заранее заполнены текущими данными аккаунта, полученными через вызов соответствующего метода. -->

   
</body>
</html>
