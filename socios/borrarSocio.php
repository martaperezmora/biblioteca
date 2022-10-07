<?php
    require "../libreria.php";
    session_start();
    
    if($_GET){
        $socios = $_SESSION["socios"];
        $dni = $_GET["dni"];

        $posicion = 0;
        $borrado = false;
        foreach($socios as $socio){

            if($dni == $socio->getDni()){
                $borrado = true;    // he eliminado un socio, ahora habrá un "espacio"
                                    // vacío en el array
            }

            if($borrado){                  // desplazo los socios una posición anterior para ocupar el espacio
                if($socios[$posicion+1] != null){  // compruebo si existe un socio en la siguiente posición
                    $socios[$posicion] = $socios[$posicion+1];  //  copio el socio a la posicion actual
                }
            }
            
            $posicion++;
        }

        unset($socios[$posicion-1]);   // como el último socio queda repetido se elimina

        $_SESSION["socios"] = $socios;
        header('Location: socios.php');
    }
    
?>