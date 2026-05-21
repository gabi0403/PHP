create table alunos (
    id serial primary KEY,
    nome text not null,
    sobrenome text not null,
    data_nascimento DATE,
    turma text not null,
    ativo boolean not null default true
);

insert into alunos(
    nome,
    sobrenome,
    data_nascimento,
    turma,
    ativo)
VALUES(
    'Jorge',
    'Carneiro',
    '1989-08-31',
    'I2D35A',
    true
    );

select * from alunos;

insert into alunos(
    nome,
    sobrenome,
    data_nascimento,
    turma,
    ativo)
VALUES(
    'Evelyn',
    'Levindo',
    '2008-11-11',
    'I2D35A',
    true
);

insert into alunos(
    nome,
    sobrenome,
    data_nascimento,
    turma,
    ativo)
VALUES(
    'Vitor',
    'Sallati',
    '2007-07-21',
    'I2E34A',
    false
);


