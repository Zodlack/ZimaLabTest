<!DOCTYPE html>
<html lang="ru"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Добавление аккаунта</title>
</head>
<body>
    <h1>Добавление аккаунта</h1>
    <form action="process_add_account.php" method="post"> <!-- Форма для отправки данных на сервер -->
        <!-- Поля для заполнения данных аккаунта -->
        <label for="first_name">Имя:</label>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="last_name">Фамилия:</label>
        <input type="text" id="last_name" name="last_name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="company_name">Название компании:</label>
        <input type="text" id="company_name" name="company_name"><br>

        <label for="position">Должность:</label>
        <input type="text" id="position" name="position"><br>

        <label for="phone1">Телефон 1:</label>
        <input type="text" id="phone1" name="phone1"><br>

        <label for="phone2">Телефон 2:</label>
        <input type="text" id="phone2" name="phone2"><br>

        <label for="phone3">Телефон 3:</label>
        <input type="text" id="phone3" name="phone3"><br>

        <!-- Кнопка для отправки формы на сервер-->
        <!--  При отправке формы данные будут направлены на страницу process_add_account.php -->
        <button type="submit">Добавить аккаунт</button>
    </form>
</body>
</html>
