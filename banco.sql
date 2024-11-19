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

-- Pet Cliente

CREATE TABLE PetCliente (
PK_petcliente_codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(150) NOT NULL,
sexo VARCHAR(45) NOT NULL,
pelo VARCHAR(45),
cor_pelo VARCHAR(45),
temperamento VARCHAR(45),
porte VARCHAR(45),
raca VARCHAR(45),
tipo VARCHAR(45),
observacao VARCHAR(150),
FK_cliente_codigo INT NOT NULL,
FOREIGN KEY (FK_cliente_codigo) REFERENCES Cliente (PK_cliente_codigo)
);
