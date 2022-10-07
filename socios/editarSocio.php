<?php
    if($_POST){
        require "../libreria.php";
        session_start();
        $socios = $_SESSION["socios"];

        $nombre = $_POST["nombre"];           //nombre editado
        $apellidos = $_POST["apellidos"];     //apellidos editados
        $dni = $_POST["dni"];                 //dni editado
        $telefono = $_POST["telefono"];       //teléfono editada
        $direccion = $_POST["direccion"];     //dirección editada

        $dniViejo = $_POST["dniViejo"];       //dni del socio antes de editarlo

        $posicion = 0;
        foreach($socios as $socio){
            if($dniViejo == $socio->getDni()){
                $socio->setNombre($nombre);
                $socio->setApellidos($apellidos);
                $socio->setDni($dni);
                $socio->setTelefono($telefono);
                $socio->setDireccion($direccion);
                $socios[$posicion] = $socio;  //vuelvo a añadir el socio en la misma posicion
                break;
            }
            $posicion++;
        }

        $_SESSION["socios"] = $socios;
        header('Location: socios.php');
    }
?>