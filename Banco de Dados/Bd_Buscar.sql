create database if not exists projetec;
use projetec;
create table if not exists usuario(
cod int(10) auto_increment primary key,
email varchar(100) not null,
nome char(50) not null, 
senha varchar(50) not null,
dataN date,
telefone varchar(14)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table if not exists onibus(
linha int(8) primary key not null ,
Origem char(50) not null,
Destino char(50) not null,
preço float(4) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table if not exists usa(
cod int (10),
linha int(8),
primary key(cod, linha),
foreign key (cod) references usuario(cod),
foreign key (linha) references onibus(linha)
);

create table if not exists chat(
linha int(8),
id_chat int primary key not null,
nome_usuario varchar(255),
dataehora datetime,
mensagem varchar(255),
linha_onibus int(8) not null,
foreign key(linha) references onibus(linha)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table if not exists tem(
linha int(8),
id_chat int primary key not null,
foreign key(linha) references onibus(linha),
foreign key(id_chat) references chat(id_chat)
);

insert into usuario (email, nome, senha, dataN, telefone)
values ("geovana@gmail.com", "geovana", "Https0668", STR_TO_DATE('24-05-2005', '%d-%m-%Y'),"(31)91212-1212"),
("ph4@gmail.com", "pedro", "123bus", STR_TO_DATE('20-04-1998', '%d-%m-%Y'),"(31)92121-2121"),
("pingosamot5@gmail.com", "tomas", "senha", STR_TO_DATE('5-10-1400', '%d-%m-%Y'),"(31)91111-2222"),
("carol1504@gmail.com", "ana carolina", "An4.allfor", STR_TO_DATE('15-04-2004', '%d-%m-%Y'),"(31)92222-1111");

select * from usuario;
desc usuario;

insert into onibus(linha, Origem, Destino, preço)
values(4600, "Nossa Senhora de Fatima/Sabará","Belo Horizonte",7.30),
(4988, "Siderurgica/Sabará","Belo Horizonte",7.60),
(4665,"General Carneiro","Belo Horizonte",7.25),
(4810,"Caeté","Terminal São Gabriel/Belo Horizonte",14.30);

select* from onibus;
describe onibus;