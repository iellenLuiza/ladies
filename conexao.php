<?php
$conexao = new mysqli("localhost", "root", "");

$sql = "CREATE DATABASE IF NOT EXISTS projetoladiesbd";

$conexao->query($sql);

$conexao->select_db("projetoladiesbd");
/*//cria tabelas
$sql = "CREATE TABLE administrador ( IdAdm INT PRIMARY KEY AUTO_INCREMENT, DataNascimentoAdm date NOT NULL, SenhaAdm varchar(50) NOT NULL, EmailAdm varchar(80) NOT NULL UNIQUE KEY, NomeAdm varchar(80) NOT NULL)";
$conexao->query($sql);
$sql = "CREATE TABLE anexos( idAnexo int PRIMARY KEY AUTO_INCREMENT, anexos TEXT)";
$conexao->query($sql);
$sql = "CREATE TABLE tag (idTag int PRIMARY KEY AUTO_INCREMENT, nometag text)";
$conexao->query($sql);
$sql = "CREATE TABLE postagens ( idPostagem int PRIMARY KEY AUTO_INCREMENT, Manchete text DEFAULT NULL, Titulo text NOT NULL, DataPostagem date DEFAULT NULL, Corpo text NOT NULL)";
$conexao->query($sql);
$sql = "CREATE TABLE usuariocadastrado( IdUsu int PRIMARY KEY AUTO_INCREMENT, EmailUsu varchar(80) NOT NULL UNIQUE KEY, DataNascimentoUsu date NOT NULL, NomeUsu varchar(80) NOT NULL, SenhaUsu varchar(50) NOT NULL, SexoUsu varchar(20) DEFAULT NULL)";
$conexao->query($sql);
$sql = "CREATE TABLE cria ( IdAdm_fk int NOT NULL, IdPostagem_fk int(11) NOT NULL, PRIMARY KEY (IdPostagem_fk,IdAdm_fk), FOREIGN KEY (IdAdm_fk) REFERENCES administrador (IdAdm), FOREIGN KEY (IdPostagem_fk) REFERENCES postagens (idPostagem))";
$conexao->query($sql);
$sql = "CREATE TABLE postagem_anexos ( IdPostagem_fk int NOT NULL, IdAnexo_fk int NOT NULL, PRIMARY KEY (IdPostagem_fk,IdAnexo_fk), FOREIGN KEY (IdPostagem_fk) REFERENCES postagens (idPostagem), FOREIGN KEY (IdAnexo_fk) REFERENCES anexos (idAnexo))";
$conexao->query($sql);
$sql = "CREATE TABLE postagem_tags ( IdPostagem_fk int NOT NULL, IdTags_fk int NOT NULL, PRIMARY KEY (IdPostagem_fk,IdTags_fk), FOREIGN KEY (IdPostagem_fk) REFERENCES postagens(idPostagem), FOREIGN KEY (IdTags_fk) REFERENCES tag(idTag))";
$conexao->query($sql);
$sql = "CREATE TABLE reacoes ( IdReacao int PRIMARY KEY AUTO_INCREMENT, Favoritar int DEFAULT NULL, IdPostagem_fk int NOT NULL, IdUsu_fk int NOT NULL, FOREIGN KEY (IdPostagem_fk) REFERENCES postagens(idPostagem), FOREIGN KEY (IdUsu_fk) REFERENCES usuariocadastrado (IdUsu))";
$conexao->query($sql);
$sql = "CREATE TABLE salvar ( IdSalvar int PRIMARY KEY AUTO_INCREMENT, StatusSalvo BOOLEAN NOT NULL, IdPostagem_fk int NOT NULL, IdUsuario_fk int NOT NULL, FOREIGN KEY (IdPostagem_fk) REFERENCES postagens(idPostagem), FOREIGN KEY (IdUsuario_fk) REFERENCES usuariocadastrado (IdUsu))";
$conexao->query($sql);
$sql = "CREATE TABLE comentario ( IdComentario int PRIMARY KEY AUTO_INCREMENT, Comentario text DEFAULT NULL, IdAdm_fk int DEFAULT NULL, IdUsu_fk int DEFAULT NULL, IdPostagem_fk int DEFAULT NULL, IdComentario_fk int DEFAULT NULL, FOREIGN KEY (IdAdm_fk) REFERENCES administrador (IdAdm), FOREIGN KEY (IdUsu_fk) REFERENCES usuariocadastrado (IdUsu), FOREIGN KEY (IdPostagem_fk) REFERENCES postagens (idPostagem), FOREIGN KEY (IdComentario_fk) REFERENCES comentario (IdComentario))";
$conexao->query($sql);
*/

/*//cria registros das tags
$sql = "INSERT INTO tag (nometag) VALUES ('2 ºGuerra Mundial'),('Século XX'),('Projeto Secreto'),('Software'),('Hadware')";
$conexao->query($sql);
*/
?>