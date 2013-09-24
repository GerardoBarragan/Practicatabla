<html>
 <head>
 <?php
  $filas = 10;
  $columnas = 10;
  $numero = 1;
  $n = true;
  ?>                                                   
 </head>                                                                 
 <body>    
 <style>
    		tr{
  	           background-color: white;
                  }
   		   tr:nth-child(2n+1){
                     background-color: green;
                   }
      </style>   
 
<table>
 <?php
 for($t=0;$t<$filas;$t++){
  echo "<tr>";
   if ($t%2==0){
          $clase='clase=dual';
        }else{
          $clase='clase=none';
        } 

  for($y=0;$y<$columnas;$y++){

   if($n){
    echo "<td style=.$clase;>".$numero."</td>";
    $n=false;
    $numero++;
   }else{
    echo "<td>".$numero."</td>";
    //El próximo será pintado
    $n=true;
    $numero++;
    }
   }
   echo "</tr>";
  }
 ?>
 </table>
 </body>                                                                 
 </html>