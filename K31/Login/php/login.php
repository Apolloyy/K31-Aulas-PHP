<?php
    session_start();
    require("../../Cadastro/php/conexao.php");
    $login = $_POST['user'];
    $senha = $_POST['password'];

    $sql = "select * from tb_aluno where nm_login=:login and cd_senha=:senha;";

    $query = $pdo->prepare($sql);
    $query->bindValue(":login", $login);
    $query->bindValue(":senha", $senha);
    $query->execute();

    if($query -> RowCount() > 0) {
        $field = $query->fetch(PDO::FETCH_ASSOC);
        $_SESSION['login'] = $field['nm_login'];
        $_SESSION['senha'] = $field['senha'];
        header("location: ../../Menu/menu.php");
        exit();
    }else{
        $_SESSION['login'] = "";
        header("location: erro.php");
    }


    

?>