create database SimbasPetShop;
use SimbasPetShop;

-- Cliente

CREATE TABLE Cliente (
PK_cliente_codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(150) NOT NULL,
email VARCHAR(150) NOT NULL,
senha VARCHAR(150) NOT NULL,
telefone VARCHAR(18) NOT NULL
);
