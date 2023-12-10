<?php
    include("conexaoo.php");
    $sql = "select * from usuarios";
    $query = $pdo->prepare($sql);
    $query->execute();

    // $campos = $query->fetch(PDO::FETCH_ASSOC);

    // echo $campos['nm_usuario'];

    
    while($campos = $query->fetch(PDO::FETCH_ASSOC)) {
        echo "<td>". $campos['nm_usuario']. "</td> ";
        echo "<td>". $campos['nr_idade']. "</td> " ;
        echo "<td>". $campos['nr_rm']. "</td> <br>";
    }
?>