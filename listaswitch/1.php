<?php
header("Content-type=text/html; charset=utf8");

if(isset($_POST["dia"]) ) {

$dia=$_POST["dia"];


   switch ($dia) {
      case '1': echo "Domingo";
         break;
           case '2': echo "Segunda-Feira";
         break;
           case '3': echo "Terca-Feira";
         break;
           case '4': echo "Quarta-Feira";
         break;
           case '5': echo "Quinta-Feira";
         break;
           case '6': echo "Sexta-Feira";
         break;
           case '7': echo "Sabado";
         break;
         default:
             echo "Invalido";
         break;
    
   }


}