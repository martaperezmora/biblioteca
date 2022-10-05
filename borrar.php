<?php
    session_start();
    require "libreria.php";
    if($_GET){
        $libros = $_SESSION["libros"];

        $isbn = $_GET["isbn"];

        header('Location: listado.php');
    }
    
?>