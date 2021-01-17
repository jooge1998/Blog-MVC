<?php

require_once 'ddbb.php';
require_once 'objBlog.php';

 class manejoBlog{

    private $obj;

        function __construct(){
            $this->obj = new DB();
        }
    

    public function insertFile(objBlog $blog){
   
        try {

            $query =  $this->obj->connect()->prepare("INSERT INTO `contenido`(`TITULO`,`AUTOR`, `COMENTARIO`, `FECHA`, `IMAGEN`) VALUES (?,?,?,?,?)");
            $query->execute([$blog->getTitulo(),
                             $blog->getAutor(),
                             $blog->getComentario(),
                             $blog->getFecha(),
                             $blog->getImagen(),
                             ]);

           /* 
            $query =  $this->obj->connect()->prepare("INSERT INTO `contenido`(`TITULO`,`AUTOR`, `COMENTARIO`, `FECHA`, `IMAGEN`) VALUES (?,?,?,?,?)");
            $query->execute([$_POST['title'],
                            $_POST['autor'],
                            $_POST['area'],
                            date("Y-m-d H:i:s"),       // fecha
                            $_FILES['file']['name']]); */
 
            if ($query->rowCount()>0) {     //verifica si una columna a sido modificada
                return "se ha insertado el archivo <br> ";
            } else {
                return "no se ha podido insertar el archivo <br>";
            } 
        
        } catch (PDOException $e){
        echo $e->getMessage();
        }
        
    }

    public function contentFecha(){

        try {
            
            $query =  $this->obj->connect()->prepare("SELECT * FROM `contenido` ORDER BY FECHA DESC");
            $query->execute();
            
            $result = $query->fetchAll(pdo::FETCH_ASSOC);  

            $array = array();
            $cont = 0;

              foreach ($result as $r ) {

                    $blog = new objBlog();

                    $blog->setId($r['ID']);
                    $blog->setTitulo($r['TITULO']);
                    $blog->setAutor($r['AUTOR']);
                    $blog->setFecha($r['FECHA']);
                    $blog->setComentario($r['COMENTARIO']);
                    $blog->setImagen($r['IMAGEN']);

                    $array [$cont] = $blog;
                    $cont++;

                    /* echo "<hr><article class='blog-post mt-3'>";
                    echo "<h2 class='blog-post-title' >" . $r['TITULO'] ."</h2>";
                    echo"<p class='blog-post-meta'>"
                    . $r['FECHA'] . " by <a href='#'>". $r['AUTOR']. "</a>
                    </p>";
                    if ($r["IMAGEN"] != "") {
                        echo  "<img class='rounded' src='../uploads/". $r['IMAGEN']."'  width='300px'>";
                    }
                    echo "<p>" . $r['COMENTARIO'] . "</p></article>";    */       
                }   
    
        
        } catch (PDOException $e){
        echo $e->getMessage();
        } 

        return $array;

    }






    }




?>