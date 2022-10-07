<?php
        //esto para rellenar el form con el libro seleccionado
        if($_GET){
            require "../libreria.php";
            session_start();
            
            $dni = $_GET["dni"];
            $socios = $_SESSION["socios"];
            foreach($socios as $socio){
                if($dni == $socio->getDni()){
                    $socioSeleccionado = $socio;   //guardo el socio que quiero mostrar en el form
                }
            }
        }
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar socio - mi biblioteca</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <h1>Mi Biblioteca</h1>
    <h2 id="encabezadoLibro">Editar Socio</h2>
    <section>
        <form action="editarSocio.php" method="post">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $socioSeleccionado->getNombre() ?>" required>
            <br>
            <label for="apellidos">Apellidos: </label>
            <input type="text" name="apellidos" id="apellidos" value="<?php echo $socioSeleccionado->getApellidos() ?>" required>
            <br>
            <label for="autor">DNI: </label>
            <input type="text" name="dni" id="dni" value="<?php echo $socioSeleccionado->getDni() ?>" required>
            <input type="hidden" name="dniViejo" value="<?php echo $dni ?>">
            <br>
            <label for="telefono">Teléfono: </label>
            <input type="text" name="telefono" id="telefono" value="<?php echo $socioSeleccionado->getTelefono() ?>" required>
            <br>
            <label for="direccion">Dirección: </label>
            <input type="text" name="direccion" id="direccion" value="<?php echo $socioSeleccionado->getDireccion() ?>" required>
            <br>
            <input type="submit" value="aceptar">
        </form>
    </section>
   
</body>
</html>