<?php
require "head.php";
if ($_GET['n']){
    session_destroy();
    'location:index.php';
}

?>