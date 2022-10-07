<?php
        session_start();
        require "../libreria.php";
        
        if($_POST){
            
            $titulo = $_POST["titulo"];
            $autor = $_POST["autor"];
            $isbn = $_POST["isbn"];
            $fecha = $_POST["fecha"];

            $libro = new libro($titulo,$autor,$isbn,$fecha); // crea objeto libro

            $libros = $_SESSION["libros"];            // extrae la sesion en una variable
 
            array_push($libros,$libro);               // añade el libro al array

            $_SESSION["libros"] = $libros;            // devuelve el array a la sesion

            header('Location: libros.php');
            
        }
    ?>