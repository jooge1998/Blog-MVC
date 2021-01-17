<?php

    class objBlog{

        private $id;
        private $titulo;
        private $autor;
        private $fecha;
        private $comentario;
        private $imagen;

        public function setId($id){
            return $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setTitulo($title){
            return $this->titulo = $title;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setAutor($autor){
            return $this->autor = $autor;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function setFecha($fecha){
            return $this->fecha = $fecha;
        }

        public function getFecha(){
            return $this->fecha;
        }

        public function setComentario($comen){
            return $this->comentario = $comen;
        }

        public function getComentario(){
            return $this->comentario;
        }

        public function setImagen($img){
            return $this->imagen = $img;
        }

        public function getImagen(){
            return $this->imagen;
        }












    }









?>