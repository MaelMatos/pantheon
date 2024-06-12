<?php
$i=0;
$permission = false;

while($i<1024){
    if (!isset($_SESSION['id_user']) && $_SESSION['id_user'] == $rules[$i]) {
        $permission = true;
        break;
    else{
        $i= $i+1;
    }
    }
}
if(!$permission){
    'location:./index.php';
}


?>