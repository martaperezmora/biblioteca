<?php
        //esto para rellenar el form con el libro seleccionado
        if($_GET){
            require "libreria.php";
            session_start();
            
            $isbn = $_GET["isbn"];
            $libros = $_SESSION["libros"];
            foreach($libros as $libro){
                if($isbn == $libro->getIsbn()){
                    $libroSeleccionado = $libro;   //guardo el libro que quiero mostrar en el form
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
    <title>libro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Mi Biblioteca</h1>
    <h2 id="encabezadoLibro">Editar Libro</h2>
    <section>
        <form action="editarLibro.php" method="post">
            <label for="titulo">Título: </label>
            <input type="text" name="titulo" id="titulo" value="<?php echo $libroSeleccionado->getTitulo() ?>" required>
            <br>
            <label for="autor">Autor: </label>
            <input type="text" name="autor" id="autor" value="<?php echo $libroSeleccionado->getAutor() ?>" required>
            <br>
            <label for="autor">ISBN: </label>
            <input type="text" name="isbn" id="isbn" value="<?php echo $libroSeleccionado->getIsbn() ?>" required>
            <input type="hidden" name="isbnViejo" value="<?php echo $isbn ?>">
            <br>
            <input type="submit" value="aceptar">
        </form>
    </section>
   
</body>
</html>