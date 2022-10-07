<?php
        session_start();
        
        if($_POST){
            require "../libreria.php";
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $dni = $_POST["dni"];
            $telefono = $_POST["telefono"];
            $direccion = $_POST["direccion"];

            $socio = new socio($nombre,$apellidos,$dni, $telefono, $direccion); // crea objeto socio

            $socios = $_SESSION["socios"];            // extrae la sesion en una variable
 
            array_push($socios,$socio);               // añade el socio al array

            $_SESSION["socios"] = $socios;            // devuelve el array a la sesion

            header('Location: socios.php');
            
        }
    ?>