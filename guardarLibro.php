<?php
        session_start();
        //$_SESSION["libros"] = array();
        if($_POST){
            require "libreria.php";
            $titulo = $_POST["titulo"];
            $autor = $_POST["autor"];
            $isbn = $_POST["isbn"];

            $libro = new libro($titulo,$autor,$isbn); // crea objeto libro

            $libros = $_SESSION["libros"];            // extrae la sesion en una variable
 
            array_push($libros,$libro);               // añade el libro al array

            $_SESSION["libros"] = $libros;            // devuelve el array a la sesion

            header('Location: listado.php');
            
        }
    ?>