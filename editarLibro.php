<?php
    if($_POST){
        require "libreria.php";
        session_start();
        $libros = $_SESSION["libros"];

        $titulo = $_POST["titulo"];  //titulo editado
        $autor = $_POST["autor"];    //autor editado
        $isbn = $_POST["isbn"];      //isbn editado
        $isbnViejo = $_POST["isbnViejo"];  //isbn del libro antes de editarlo

        $librosEditados = array();
        $posicion = 0;
        foreach($libros as $libro){
            if($isbnViejo == $libro->getIsbn()){
                $libro->setTitulo($titulo);
                $libro->setAutor($autor);
                $libro->setIsbn($isbn);
                //unset($libros[$posicion]);        //elimino el libro
                //$libros = array_values($libros);  //reajusto el array
                $libros[$posicion] = $libro;        //vuelvo a añadir el libro en la misma posicion
            }
            array_push($librosEditados, $libro);
            $posicion++;
        }

        $_SESSION["libros"] = $librosEditados;
        header('Location: listado.php');
    }

?>