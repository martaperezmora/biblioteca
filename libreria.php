<?php
// clase libro
        class libro{
            public $titulo;
            public $autor;
            public $isbn;
            public $fecha;
             
            function libro($titulo,$autor,$isbn, $fecha){
                $this -> titulo = $titulo;
                $this -> autor = $autor;
                $this -> isbn = $isbn;
                $this -> fecha = $fecha;
            }

            function setTitulo($titulo){
                $this -> titulo = $titulo;
            }

            function setAutor($autor){
                $this -> autor = $autor;
            }

            function setIsbn($isbn){
                $this -> isbn = $isbn;
            }

            function setFecha($fecha){
                $this -> fecha = $fecha;
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

            function getFecha(){
                return $this->fecha;
            }

        }

// clase socio
        class socio{
            public $nombre;
            public $apellidos;
            public $dni;
            public $telefono;
            public $direccion;

            function socio($nombre,$apellidos,$dni, $telefono, $direccion){
                $this -> nombre = $nombre;
                $this -> apellidos = $apellidos;
                $this -> dni = $dni;
                $this -> telefono = $telefono;
                $this -> direccion = $direccion;
            }

            function setNombre($nombre){
                $this -> nombre = $nombre;
            }

            function setApellidos($apellidos){
                $this -> apellidos = $apellidos;
            }

            function setDni($dni){
                $this -> dni = $dni;
            }

            function setTelefono($telefono){
                $this -> telefono = $telefono;
            }

            function setDireccion($direccion){
                $this -> direccion = $direccion;
            }

            function getNombre(){
                return $this->nombre;
            }

            function getApellidos(){
                return $this->apellidos;
            }

            function getDni(){
                return $this->dni;
            }

            function getTelefono(){
                return $this->telefono;
            }

            function getDireccion(){
                return $this->direccion;
            }
        }

?>