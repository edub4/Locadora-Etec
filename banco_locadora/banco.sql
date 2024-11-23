CREATE DATABASE `lovetec`;
USE `lovetec`;
CREATE TABLE `locadora` (
    `codigo_locadora` int auto_increment PRIMARY KEY,
    `nome_locadora` varchar (50),
    `cnpj_locadora` varchar (14) not null UNIQUE,
    `endereco_locadora` varchar (50) not null,
    `telefone_locadora` varchar (13) not null
);

CREATE TABLE `cliente` (
    `codigo_cliente` int auto_increment PRIMARY KEY,
    `nome_cliente` varchar (50) not null,
    `data_nascimento_cliente` date,
    `numero_cnh_cliente` varchar (15) not null,
    `telefone_cliente` varchar (13) not null,
    `cpf_cliente` varchar (11) not null,
    `senha_cliente` VARCHAR (10) NOT NULL,
    UNIQUE (`numero_cnh_cliente`, `cpf_cliente`)
);

CREATE TABLE `locacao` (
    `codigo_locacao` int auto_increment PRIMARY KEY,
    `data_inicial_locacao` date not null,
    `data_final_locacao` date not null,
    `valor_diaria_locacao` DOUBLE (6,2) not null,
    `valor_final_locacao` DOUBLE (8,2) not null
);

CREATE TABLE `veiculo` (
    `codigo_veiculo` int auto_increment PRIMARY KEY,
    `nome_veiculo` varchar (40) not null,
    `placa_veiculo` varchar(8) not null,
    `valor_diaria_veiculo` double (6,2) not null,
    `ano_fabricacao_veiculo` varchar (4) not null,
    `cor_veiculo` varchar (12) not null,
    `modelo_veiculo` varchar (30) not null
);

CREATE TABLE `endereco` (
    `codigo_endereco` int auto_increment PRIMARY KEY,
    `nome_endereco` varchar(50) not null,
    `codigo_cliente` int,
    `codigo_locadora` int,
    `tipo_endereco` varchar (50) not null
);

CREATE TABLE `telefone` (
    `codigo_telefone` int auto_increment PRIMARY KEY,
    `numero_telefone` varchar (13) not null,
    `codigo_cliente` int,
    `codigo_locadora` int
);

ALTER TABLE `endereco` ADD CONSTRAINT `FK_endereco_2`
    FOREIGN KEY (`codigo_cliente`)
    REFERENCES `cliente` (`codigo_cliente`);

ALTER TABLE `endereco` ADD CONSTRAINT `FK_endereco_3`
    FOREIGN KEY (`codigo_locadora`)
    REFERENCES `locadora` (`codigo_locadora`);

ALTER TABLE `telefone` ADD CONSTRAINT `FK_telefone_2`
    FOREIGN KEY (`codigo_cliente`)
    REFERENCES `cliente` (`codigo_cliente`);

ALTER TABLE `telefone` ADD CONSTRAINT `FK_telefone_3`
    FOREIGN KEY (`codigo_locadora`)
    REFERENCES `locadora` (`codigo_locadora`);