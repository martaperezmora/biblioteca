<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>libros - mi biblioteca</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <h1>Mi Biblioteca</h1>
    <h2>Listado libros</h2>
    <section>
        <a class="botonEnlace" href="libroAlta.html">añadir</a>
        <br>
        <table>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>ISBN</th>
                <th>Fecha</th>
                <th id="thBotones"></th>
            </tr>
            <?php
                require "../libreria.php";
                session_start();
                
                $libros = $_SESSION["libros"];

                    foreach($libros as $libro){
                        echo "<tr>
                                <td>".$libro->getTitulo()."</td>
                                <td>".$libro->getAutor()."</td>
                                <td>".$libro->getIsbn()."</td>
                                <td>".$libro->getFecha()."</td>
                                <td id='tdBotones'>
                                    <a href='libroMod.php?isbn=".$libro->getIsbn()."' class='botonEnlace'>editar</a>
                                    <a href='borrarLibro.php?isbn=".$libro->getIsbn()."' class='botonEnlace'>borrar</a>
                                </td>
                            </tr>";
                    } 
            ?>
        </table>
    </section>
</body>
</html>