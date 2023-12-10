<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e horário em Php</title>
</head>
<body>
    <div class="card">
        <div class="innerleft">
        <h1 id="tt">Data:</h1>
        <h1 id="tt">Dia da semana:</h1>
        <h1 id="tt">Data MySQL:</h1>
        <h1 id="tt">Data e hora:</h1>
        </div>
        <div class="innerright">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap');
        *{
            margin:0;
            padding:0;
            font-family: 'Montserrat', sans-serif;
        }
        body{
            width:100%;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .card{
            width:30rem;
            height:20rem;
            background-color:#e3c3c1; 
            padding:2rem;
            display:flex; 
            flex-direction:row;
            gap:1rem;
            border-radius:10px;
            overflow: hidden;
            justify-content:center;
            align-items: center;
             
        }
        #tt{
            font-size:1.5rem;
            font-weight:400;
        }
        .innerleft{
            width:50%;
            height:100%;
            display:flex;
            flex-direction:column;
            gap:1rem;
            align-items:center;
        }
        .innerright{
            width:50%;
            height:100%;
            display:flex;
            flex-direction:column;
            gap:1rem;

        }
        #tc{
            font-weight:400;
            font-size:1.5rem;
            
        }
    </style>


<?php    
    $diadasemana['Monday'] = 'Segunda-Feira';
    $diadasemana['Tuesday'] = 'Terceira-Feira';
    $diadasemana['Wednesday'] = 'Quarta-Feira';
    $diadasemana['Thursday'] = 'Quinta-Feira';
    $diadasemana['Friday'] = 'Sexta-Feira';
    $diadasemana['Saturday'] = 'Sábado';
    $diadasemana['Sunday'] = 'Domingo';

    $data = date("d.m.Y");
    echo  '<h1 id="tc">'. $data. "</h1>";
    echo "<h1 id='tc'>" .$diadasemana[date('l')]. "</h1>";
    $datasql = date("Y-m-d");
    echo '<h1 id="tc">'. $datasql. "</h1>";
    $Now = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
    echo '<h1 id= "tc">'.$Now->format('Y-m-d H:i:s')."</h1>";
    


    
    //  $date = getdate();
    //  echo $date ["mday"]."/" . $date ["mon"]."/". $date ["year"]. "<br>";
    // $minha_data = getdate();
    // echo $minha_data["hours"].":".$minha_data["minutes"].":". $minha_data["seconds"]. "<br>";

    
?>
    </div>
</div>
</body>
</html>