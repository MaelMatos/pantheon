<?php
require "/head.php";
     $i = 0;
     $id_tecnica = [];
     while (true){
         if(isset($_POST["'tecnica".$i."'"])){
             $id_tecnica = $id_tecnica + $_POST["'tecnica".$i."'"];
             $i = $i+1;
         }
         else{
             break
         }
     } 
?>