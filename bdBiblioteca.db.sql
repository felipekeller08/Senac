BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "alunos" (
	"id_aluno"	INTEGER NOT NULL,
	"nome"	TEXT NOT NULL,
	"email"	TEXT,
	"ativo"	TEXT DEFAULT 'A',
	PRIMARY KEY("id_aluno" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "autores" (
	"id_autor"	INTEGER,
	"nome"	TEXT NOT NULL,
	PRIMARY KEY("id_autor" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "emprestimos" (
	"id_imprestimo"	INTEGER,
	"data"	TEXT NOT NULL,
	"id_livro"	INTEGER,
	"id_aluno"	INTEGER,
	PRIMARY KEY("id_imprestimo" AUTOINCREMENT),
	FOREIGN KEY("id_aluno") REFERENCES "alunos"("id_aluno"),
	FOREIGN KEY("id_livro") REFERENCES "livros"("id_livro")
);
CREATE TABLE IF NOT EXISTS "livros" (
	"nome"	TEXT NOT NULL,
	"ano"	INTEGER NOT NULL,
	"id_livro"	INTEGER,
	"valor"	REAL,
	"id_autor"	INTEGER,
	PRIMARY KEY("id_livro" AUTOINCREMENT),
	FOREIGN KEY("id_autor") REFERENCES "autores"("id_autor")
);
INSERT INTO "alunos" VALUES (1,'Felipe ','felipe@gmail.com','A');
INSERT INTO "alunos" VALUES (2,'Maria Clara ','mc@gmail.com','A');
INSERT INTO "alunos" VALUES (3,'zuleica','zuzu@gmail.com','A');
INSERT INTO "alunos" VALUES (4,'Matheus','matheus@gmail.com','A');
INSERT INTO "alunos" VALUES (5,'santiago','santi@gmail.com','I');
INSERT INTO "autores" VALUES (1,'pafúncio ferreira');
INSERT INTO "autores" VALUES (2,'didonet baguett');
INSERT INTO "autores" VALUES (3,'gerundino chavier');
INSERT INTO "autores" VALUES (4,'Karl marcos');
INSERT INTO "autores" VALUES (5,'vinicius keller');
INSERT INTO "autores" VALUES (6,'dobbler lopes vanin');
INSERT INTO "autores" VALUES (7,'Lucca Mante');
INSERT INTO "emprestimos" VALUES (1,'20/10/12',1,3);
INSERT INTO "emprestimos" VALUES (2,'11/08/2024',5,2);
INSERT INTO "emprestimos" VALUES (3,'21/07/2022',3,4);
INSERT INTO "livros" VALUES ('comunismo',1862,1,0.0,4);
INSERT INTO "livros" VALUES ('O homem ',12,2,4000000.0,1);
INSERT INTO "livros" VALUES ('Cacetinho',300,3,2529.0,2);
INSERT INTO "livros" VALUES ('Senacando',1960,4,696969.0,3);
INSERT INTO "livros" VALUES ('O desvio do rizzo',2015,5,89.9,5);
INSERT INTO "livros" VALUES ('Os galos da poli',1945,6,19.45,6);
INSERT INTO "livros" VALUES ('Lagoenses ',2001,7,9.11,7);
COMMIT;
