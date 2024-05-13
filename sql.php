Create database autopeca;

use autopeca;

create table cad_pecas(
	id int primary key auto_increment,
    nome varchar(150),
    fornecedor varchar(150),
    valorCompra float,
    valorVenda float
    
);

create table venda_pecas(
	id int primary key auto_increment,
    codPeca int,
    nomePeca varchar(150),
    valorVenda float,
    quantidade float,
    total float,
    dataHora date default current_timestamp

);