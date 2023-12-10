<?php
    $busca= $_POST["busca"];

    include("conexao.php");
    // $sql = "select * from tb_usuario where nm_usuario like '%a%'";

    $sql = "select * from tb_usuario where nm_usuario like '%:busca%'";
    $query = $pdo->prepare($sql);
    $query->bindParam(":busca", $busca);
    $query->execute();

    // $campos = $query->fetch(PDO::FETCH_ASSOC);

    // echo $campos['nm_usuario'];

    
    while($campos = $query->fetch(PDO::FETCH_ASSOC)) {
        echo "<td> Nome:". $campos['nm_usuario']. "</td> <br>";
        echo "<td> Senha:". $campos['cd_senha']. "</td> <br>";
        echo "<td> Idade:". $campos['nr_idade']. "</td> <br> <br>" ;
    }
?>