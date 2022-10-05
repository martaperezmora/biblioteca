<?php
    session_start();
    $_SESSION["libros"] = array();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Mi Biblioteca</h1>
    <h2>Página Principal</h2>
    <section>
        <ul>
            <li><a href="listado.php">Listado libros</a></li>
            <li><a href="socios.php">Socios</a></li>
        </ul>
    </section>
</body>
</html>