drop table Empresa;
create table Empresa
(
	ID int not null auto_increment primary key,
    NomeFantasia varchar(40),
    CNPJ varchar(40),
    Cnae varchar(40),
    RazaoSocial varchar(120),
    Data_Abertura date,
    Tipo varchar(30),
    NaturezaJuridica varchar(40)
);

drop table Terceiros;
create table Terceiros
(
	ID int not null auto_increment primary key,
    NomeFantasia varchar(40),
    CNPJ varchar(40),
    Cnae varchar(40),
    RazaoSocial varchar(120),
    Data_Abertura date,
    Tipo varchar(30),
    NaturezaJuridica varchar(40)
);

drop table Insumo;
create table Insumo
(
	ID int not null auto_increment primary key,
    Codigo varchar(20),
    Metodo_Descarte varchar(30),
    data_descarte date,
    data_entrada date,
    Foi_Reciclado bool,
    Quantidade int,
    Terceiro int,
    Nivel_Risco int
);



)


