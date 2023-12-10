<?php
 $nomeMeses[1]="Janeiro";
 $nomeMeses[2]="Fevereiro";
 $nomeMeses[3]="Março";
 $nomeMeses[4]="Abril";
 $nomeMeses[5]="Maio";
 $nomeMeses[6]="Junho";
 $nomeMeses[7]="Julho";
 $nomeMeses[8]="Agosto";
 $nomeMeses[9]="Setembro";
 $nomeMeses[10] ="Outubro";
 $nomeMeses[11] ="Novembro";
 $nomeMeses[12]="Dezembro";

//  for( $i = 1; $i <= 12; $i++){
//     echo("<br>".$nomeMeses[$i]);

//  }

 $mesatual = date('n');
 echo $nomeMeses[$mesatual];

 
?>