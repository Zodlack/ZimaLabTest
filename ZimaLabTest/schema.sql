
CREATE DATABASE IF NOT EXISTS zodla172_client_management;   


USE zodla172_client_management;


CREATE TABLE IF NOT EXISTS clients (
    id INT PRIMARY KEY AUTO_INCREMENT,       
    last_name VARCHAR(50) NOT NULL,         
    email VARCHAR(100) NOT NULL,              
    company_name VARCHAR(100),              
    position VARCHAR(50),                   
    phone1 VARCHAR(20),                     
    phone2 VARCHAR(20),                     
    phone3 VARCHAR(20)                      
);
