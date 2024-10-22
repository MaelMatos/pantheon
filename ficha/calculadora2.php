<?php
$ra= $_GET['ra'];
$rn= $_GET['rn'];
$nl= $_GET['nl'];
$va= $_GET['va'];
$m= $_GET['m'];
$vt= 0;
$nd = $rn-$ra;
include "../head.php";
include "dados.php";
$dr=Dcrit($nd,$nl);
while($rn>$ra)
 {
  $ra=$ra+1;
  $vt=$vt+$ra;
 }
$m = $m*$nd;
$r=$vt+$dr+$va+$m;
echo "sua nova vida/energia é: ".$r;
?>