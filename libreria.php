<?php
// clase libro
        class libro{
            public $titulo;
            public $autor;
            public $isbn;
             
            function libro($titulo,$autor,$isbn){
                $this -> titulo = $titulo;
                $this -> autor = $autor;
                $this -> isbn = $isbn;
            }

            function setTitulo($titulo){
                $this -> titulo;
            }

            function setAutor($autor){
                $this -> autor;
            }

            function setIsbn($isbn){
                $this -> isbn;
            }

            function getTitulo(){
                return $this->titulo;
            }

            function getAutor(){
                return $this->autor;
            }

            function getIsbn(){
                return $this->isbn;
            }

            function comparar($obj1, $obj2){
                if($obj1 == $obj2) return true;
                else return false;

            }

        }

?>