<?php
    if($_POST){
        require "../libreria.php";
        session_start();
        $libros = $_SESSION["libros"];

        $titulo = $_POST["titulo"];        //titulo editado
        $autor = $_POST["autor"];          //autor editado
        $isbn = $_POST["isbn"];            //isbn editado
        $fecha = $_POST["fecha"];          //fecha editada
        $isbnViejo = $_POST["isbnViejo"];  //isbn del libro antes de editarlo

        $posicion = 0;
        foreach($libros as $libro){
            if($isbnViejo == $libro->getIsbn()){
                $libro->setTitulo($titulo);
                $libro->setAutor($autor);
                $libro->setIsbn($isbn);
                $libro->setFecha($fecha);
                $libros[$posicion] = $libro;  //vuelvo a añadir el libro en la misma posicion
                break;
            }
            $posicion++;
        }

        $_SESSION["libros"] = $libros;
        header('Location: libros.php');
    }
?>