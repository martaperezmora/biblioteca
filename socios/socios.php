<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>socios - mi biblioteca</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <h1>Mi Biblioteca</h1>
    <h2>Listado socios</h2>
    <section>
        <a class="botonEnlace" href="socioAlta.html">añadir</a>
        <br>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>DNI</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th id="thBotones"></th>
            </tr>
            <?php
                require "../libreria.php";
                session_start();
                
                $socios = $_SESSION["socios"];

                    foreach($socios as $socio){
                        echo "<tr>
                                <td>".$socio->getNombre()."</td>
                                <td>".$socio->getApellidos()."</td>
                                <td>".$socio->getDni()."</td>
                                <td>".$socio->getTelefono()."</td>
                                <td>".$socio->getDireccion()."</td>
                                <td id='tdBotones'>
                                    <a href='socioMod.php?dni=".$socio->getDni()."' class='botonEnlace'>editar</a>
                                    <a href='borrarSocio.php?dni=".$socio->getDni()."' class='botonEnlace'>borrar</a>
                                </td>
                            </tr>";
                    } 
            ?>
        </table>
    </section>
</body>
</html>