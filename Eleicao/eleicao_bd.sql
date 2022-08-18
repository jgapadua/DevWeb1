create database Eleitor;

use Eleitor;

create table Cargos(
CODIGO int NOT NULL,
NOME varchar (45) not null,
TIPO varchar (30) not null,
primary key (CODIGO)
);

INSERT INTO Cargos(Codigo, Nome, Tipo) VALUES
('1','Presidente', 'Federal');
INSERT INTO Cargos(Codigo, Nome, Tipo) VALUES
('2','Governador', 'Estadual');
INSERT INTO Cargos(Codigo, Nome, Tipo) VALUES
('3','Senador', 'Estadual');
INSERT INTO Cargos(Codigo, Nome, Tipo) VALUES
('4','Deputado Federal', 'Federal');
INSERT INTO Cargos(Codigo, Nome, Tipo) VALUES
('5','Deputado Estadual', 'Estadual');

create table Partidos(
CODIGO int NOT NULL,
NOME varchar (45) not null,
Sigla char (7) not null,
Presidente varchar (45) not null,
UF char (2),
primary key (CODIGO)
);

INSERT INTO Partidos(Codigo, Nome, Sigla, Presidente, UF) VALUES
('1','Presidente', 'Federal');
INSERT INTO Partidos(Codigo, Nome, Sigla, Presidente, UF) VALUES
('2','Governador', 'Estadual');
INSERT INTO Partidos(Codigo, Nome, Sigla, Presidente, UF) VALUES
('3','Senador', 'Estadual');
INSERT INTO Partidos(Codigo, Nome, Sigla, Presidente, UF) VALUES
('4','Deputado Federal', 'Federal');
INSERT INTO Partidos(Codigo, Nome, Sigla, Presidente, UF) VALUES
('5','Deputado Estadual', 'Estadual');

create table Urna(
Numero int NOT NULL,
Municipio varchar (45),
Zona integer,
Secao integer,
primary key (numero)
);


create table Eleitor(
CODIGO int NOT NULL,
NOME varchar (45) not null,
Endereco varchar (45) not null,
CPF char (14),
RG char (15),
Titulo char (15) not null,
Zona integer,
Secao integer,
primary key (CODIGO)
);

create table Eleicao(
CODIGO int NOT NULL,
Descricao varchar (45) not null,
Date DATE not null,
Turno integer,
Horario TIME,
Urna_Numero int not null,
primary key (CODIGO),
foreign key (Urna_Numero) references Urna(numero)
);


create table Candidatos(
Numero int NOT NULL,
NOME varchar (45) not null,
Endereco varchar (45) not null,
Cidade varchar (45) not null,
UF char (2),
Foto varchar (50), 
Idade INTEGER,
Partido_Codigo int not null,
Cargo_Codigo int not null,
primary key (Numero),
foreign key (Partido_Codigo) references Partidos(codigo),
foreign key (Cargo_Codigo) references Cargos(codigo)
);

create table Voto(
CODIGO int NOT NULL,
Quantidade INTEGER,
Eleicao_Codigo int not null,
Cargo_Codigo int not null,
Eleitor_Codigo int not null,
primary key (CODIGO),
foreign key (Eleicao_Codigo) references Eleicao(codigo),
foreign key (Cargo_Codigo) references Cargos(codigo),
foreign key (Eleitor_Codigo) references Eleitor(codigo)
);





