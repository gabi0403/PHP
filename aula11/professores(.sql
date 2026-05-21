create table professores(
    id serial primary KEY,
    nome text not null,
    disciplina text not null
)

insert into professores(
    nome,
    disciplina
)
VALUES(
    'Marcela Saraiva Ramos',
    'Língua Portuguesa'
);

insert into professores(
    nome,
    disciplina
)
VALUES(
    'Cássia Thais',
    'Química'
);

SELECT * FROM professores;

UPDATE professores
SET disciplina = 'TPT'
WHERE id = 1;