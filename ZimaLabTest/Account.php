<?php
    class Account {
        private $id;
        private $firstName;
        private $lastName;
        private $email;
        private $companyName;
        private $position;
        private $phone1;
        private $phone2;
        private $phone3;
    
        public function __construct($id, $firstName, $lastName, $email, $companyName, $position, $phone1, $phone2, $phone3) {
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->companyName = $companyName;
            $this->position = $position;
            $this->phone1 = $phone1;
            $this->phone2 = $phone2;
            $this->phone3 = $phone3;
        }
    
        public function getId() {
            return $this->id;
        }
    
        public function getFirstName() {
            return $this->firstName;
        }
    
        public function getLastName() {
            return $this->lastName;
        }
    
        public function getEmail() {
            return $this->email;
        }
    
        public function getCompanyName() {
            return $this->companyName;
        }
    
        public function getPosition() {
            return $this->position;
        }
    
        public function getPhone1() {
            return $this->phone1;
        }
    
        public function getPhone2() {
            return $this->phone2;
        }
    
        public function getPhone3() {
            return $this->phone3;
        }
    
        // Метод для получения всех аккаунтов из базы данных
        public static function getAllAccounts($conn) {
            include_once 'db.php'; // Подключаем файл с настройками подключения к базе данных
    
            $accounts = array(); // Создаем пустой массив для хранения объектов Account
    
            // Создаем SQL-запрос для получения всех аккаунтов
            $sql = "SELECT * FROM clients";
    
            // Выполняем SQL-запрос
            $result = $conn->query($sql);
    
            // Проверяем, есть ли результаты
            if ($result->num_rows > 0) {
                // Проходим по каждой строке результата и создаем объекты Account
                while ($row = $result->fetch_assoc()) {
                    $account = new Account(
                        $row['id'],
                        $row['first_name'],
                        $row['last_name'],
                        $row['email'],
                        $row['company_name'],
                        $row['position'],
                        $row['phone1'],
                        $row['phone2'],
                        $row['phone3']
                    );
                    $accounts[] = $account;
                }
            }
    
            return $accounts; // Возвращаем массив объектов Account
        }
    
        // Метод для удаления аккаунта из базы данных по идентификатору
        public static function deleteAccount($conn, $accountId) {
            include_once 'db.php'; // Подключаем файл с настройками подключения к базе данных

            // Создаем SQL-запрос для удаления аккаунта
            $sql = "DELETE FROM clients WHERE id = $accountId";

            // Выполняем SQL-запрос
            $result = $conn->query($sql);

            // Возвращаем true, если запрос выполнен успешно, иначе false
            return $result === TRUE;
        }


        // Метод для получения аккаунта по идентификатору
        public static function getAccountById($conn, $accountId) {
            include_once 'db.php'; // Подключаем файл с настройками подключения к базе данных

            // Создаем SQL-запрос для получения аккаунта по идентификатору
            $sql = "SELECT * FROM clients WHERE id = $accountId";

            // Выполняем SQL-запрос
            $result = $conn->query($sql);

            // Проверяем, есть ли результаты
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $account = new Account(
                    $row['id'],
                    $row['first_name'],
                    $row['last_name'],
                    $row['email'],
                    $row['company_name'],
                    $row['position'],
                    $row['phone1'],
                    $row['phone2'],
                    $row['phone3']
                );
                return $account;
            } else {
                return null;
            }
        }

        
    }
    

?>