create database db_propinas;
use db_propinas;

  Create table permissao(
  idpermissao int AUTO_INCREMENT,
  descricao  varchar(25),
  primary key(idpermissao)
  );
  
 Create table usuario(
  idusuario int AUTO_INCREMENT,
  nome varchar(45),
  login varchar(45) ,
  senha varchar(19),
  idpermissao  int,
  Primary key(idusuario),
  Foreign key(idpermissao) references permissao(idpermissao)
  );

    create table ano_lectivo (
      id_ano_lectivo int AUTO_INCREMENT,
      descricao varchar(10),
      primary key(id_ano_lectivo)
    );
    

    create table classe (
      idclasse int AUTO_INCREMENT,
      descricao  varchar(45),
      primary key(idclasse)
    );

   Create table turma(
  idturma int AUTO_INCREMENT,
  descricao  varchar(25),
  primary key(idturma)
  );
    Create table sala(
  idsala int AUTO_INCREMENT,
  descricao  varchar(25),
  primary key(idsala)
  );

 Create table curso(
  idcurso int AUTO_INCREMENT,
  descricao  varchar(25),
  primary key(idcurso)
  );

  create table banco(
  idbanco int AUTO_INCREMENT,
  descricao varchar(20), 
   primary key(idbanco)
  );
create table tipo_emolumento (
  id_tipo_emolumento int AUTO_INCREMENT,
  descricao varchar(30),
  primary key(id_tipo_emolumento)
);

create table emolumento(
  id_emo  int AUTO_INCREMENT,
  preco float,
  idcurso int,
  idturma int,
  idclasse int,
  id_tipo_emolumento int,
  primary key(id_emo),
  Foreign key(idcurso) references curso(idcurso),
   Foreign key(idturma) references turma(idturma),
  Foreign key(idclasse) references classe(idclasse),
   Foreign key(id_tipo_emolumento) references tipo_emolumento(id_tipo_emolumento)
);


  create table aluno(
  idaluno int AUTO_INCREMENT,
  nome varchar(190) not null,
  tipo varchar (10) not null,
  idclasse int,
  idturma int,
  idsala  int,
  idcurso int, 
  primary key(idaluno),
   Foreign key(idclasse) references classe(idclasse),
  Foreign key(idturma) references turma(idturma),
  Foreign key(idcurso) references curso(idcurso),
  Foreign key(idsala) references sala(idsala)
  );


  create table pagamento (
    idpagamento int AUTO_INCREMENT,
    servico varchar (30) not null,
    valor float,
    desconto float,
    multa float,
    total float,
    mes_ref varchar(30) not null,
    saldo float ,
    idano_lectivo int,
    idbanco int,
    primary key(id_pagamento),
   Foreign key(id_ano_lectivo) references ano_lectivo(id_ano_lectivo),
  Foreign key(idbanco) references banco(idbanco)
  );

  create table itens_pagamento (
    id_itens_pagamento int AUTO_INCREMENT,
    data_pag datetime,
    id_pagamento int,
    idaluno int,
    primary key(id_itens_pagamento),
    Foreign key(id_pagamento) references pagamento(id_pagamento),
    Foreign key(idaluno) references aluno(idaluno)
  );


    create table inscricao (
    idinscricao int AUTO_INCREMENT,
    nome_aluno varchar(45) not null,
    pai varchar (30) not null,
    mae varchar (30) not null,
    data_nasc date, 
    email varchar (45) not null,
    idaluno int,
    primary key(idinscricao),
     Foreign key(idaluno) references aluno(idaluno)
  );
