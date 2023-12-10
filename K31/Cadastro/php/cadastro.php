<?php
include('conexao.php'); //include da folha de conexão

    //declarando variaveis para pegar valores do insert
    $user = $_POST["user"];
    $password = $_POST["password"];
    $today = date("Y-m-d");

    //insert:
    $sql_insert = 'INSERT INTO tb_aluno VALUES (null, :user, :password, :today);';

    //preparando o insert (com o $pdo, digo para o php em qual tabela quero inserir)
    $inserir = $pdo->prepare($sql_insert);

    //bindando valores para os parâmetros dados ao insert
    $inserir->bindValue(':user', $user);
	$inserir->bindValue(':password', $password);
	$inserir->bindValue(':today', $today);

    //executando a clausula
    $inserir->execute();
?>