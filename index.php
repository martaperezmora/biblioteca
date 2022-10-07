<?php
    require "libreria.php";
    session_start();

    // si no existen las sesiones, las inicializo
    if (!isset($_SESSION['libros'])) {
        $_SESSION["libros"] = array();
        $libros = $_SESSION["libros"];
        array_push($libros, new libro("Todo esto te daré","Dolores Redondo","4343434343","2016"));  
        array_push($libros, new libro("Un mundo feliz","Aldous Huxley","9788497594257","1932"));
        array_push($libros, new libro("El desorden que dejas","Carlos Montero","9788467050271","2020"));
        array_push($libros, new libro("Harry Potter y la piedra filosofal","J.K. Rowling","9788478884452","1999"));

        $_SESSION["libros"] = $libros;
    }
    
    if (!isset($_SESSION['socios'])) {
        $_SESSION["socios"] = array();
    }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>
    <h1>Mi Biblioteca</h1>
    <h2>Página Principal</h2>
    <section>
        <ul>
            <li><a href="libros/libros.php">Libros</a></li>
            <li><a href="socios/socios.php">Socios</a></li>
        </ul>
    </section>
</body>
</html>