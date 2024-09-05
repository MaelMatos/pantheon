<?php
if(!isset($_SESSION)){
    session_start();
    if(!isset($_SESSION['head'])){
        $_SESSION['head'] = $_SERVER['DOCUMENT_ROOT']."/pantheon/head.php";
    }
}
?>