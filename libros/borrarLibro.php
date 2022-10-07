<?php
    require "../libreria.php";
    session_start();
    
    if($_GET){
        $libros = $_SESSION["libros"];
        $isbn = $_GET["isbn"];

        $posicion = 0;
        $borrado = false;
        foreach($libros as $libro){

            if($isbn == $libro->getIsbn()){
                $borrado = true;    // he eliminado un libro, ahora habrá un "espacio"
                                    // vacío en el array
            }

            if($borrado){                  // desplazo los libros una posición anterior para ocupar el espacio
                if($libros[$posicion+1] != null){  // compruebo si existe un libro en la siguiente posición
                    $libros[$posicion] = $libros[$posicion+1];  //  copio el libro a la posicion actual
                }
            }
            
            $posicion++;
        }

        unset($libros[$posicion-1]);   // como el último libro queda repetido se elimina

        $_SESSION["libros"] = $libros;
        header('Location: libros.php');
    }
    
?>