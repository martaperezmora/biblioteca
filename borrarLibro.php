<?php
    require "libreria.php";
    session_start();
    
    if($_GET){
        $libros = $_SESSION["libros"];
        $isbn = $_GET["isbn"];

        $posicion = 0;
        foreach($libros as $libro){
            if($isbn == $libro->getIsbn()){
                unset($libros[$posicion]); 
                array_values($libros);
            }
            $posicion++;
        }

        $_SESSION["libros"] = $libros;
        header('Location: listado.php');
    }
    
?>