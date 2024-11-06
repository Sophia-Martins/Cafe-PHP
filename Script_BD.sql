Create database bd_cafe;
use bd_cafe;

create table tb_funcionario (
cd_funcionario int primary key auto_increment,
nm_funcionario varchar(45),
sobrenome varchar(45),
dt_nascimento date,
cargo varchar (45),
vl_salario decimal(6,2),
dt_admissao date,
senha text

);

create table tb_cliente (
cd_cliente int primary key auto_increment,
nm_cliente varchar(45),
sobrenome varchar(45),
emal varchar(45),
nr_telefone varchar(13),
nm_endereco varchar(45),
nr_endereco int
);

create table tb_fornecedor (
cd_fornecedor int primary key auto_increment,
nm_fornecedor varchar(45),
contato varchar(45),
email varchar(45),
nr_telefone varchar(13),
nm_endereco varchar(45),
nr_endereco int
);


select * from tb_funcionario;


