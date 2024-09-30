<?php
require "head.php";
if ($_GET['n']){
    session_destroy();
    header('location:index.php');
}

?>