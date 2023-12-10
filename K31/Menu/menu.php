<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="header">
          <div class="content">
            <img src="../images/ghost-solid.svg" style="width: 30px" alt="" />
            <a href="redirect.html">Acessar Aulas de Programação</a>

            <p>Bem Vindo<br> <strong><?php echo $_SESSION['login']; ?></strong></p>
            <a href="../Login/login.html">Sair</a>
          </div>
        </div>
        <div class="title">
          <h1>Bem Vindo ao Menu</h1>
          <p class="desc">
            Menu do K31
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
