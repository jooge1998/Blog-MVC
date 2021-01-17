<?php

include_once '../Model/manejoBlog.php';
include_once '../Model/objBlog.php';

$manObj = new manejoBlog();
$tablaBlod = $manObj->contentFecha();

if (isset($_POST['btn'])) {

    $fileError = $_FILES['file']['error'];

    switch ($fileError) {
        case 1: echo "El fichero subido excede la directiva upload_max_filesize de php.ini."; break;
        case 2: echo "El fichero subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML."; break;
        case 3: echo "El fichero fue sólo parcialmente subido."; break;
        case 4: echo "No se subió ningún fichero."; break;
        case 6: echo "Falta la carpeta temporal."; break;
        case 7: echo "No se pudo escribir el fichero en el disco."; break;

    }

    if (isset($_FILES['file']['name']) && ($fileError == UPLOAD_ERR_OK)) {

        $nameFile = $_FILES['file']['name']; //nombre del archivo
        $destino = $_SERVER['DOCUMENT_ROOT']."/blog/uploads/";              // posible error
        
        move_uploaded_file($_FILES['file']["tmp_name"],$destino.$nameFile);// mover la imagen del directorio temporal al directorio escogido

        $manObj = new manejoBlog();
        $blog = new objBlog();

        date_default_timezone_set("America/Bogota"); //Establece la zona horaria predeterminada

        $blog->setTitulo($_POST['title']);
        $blog->setAutor( $_POST['autor']);
        $blog->setFecha(date("Y-m-d H:i:s"));
        $blog->setComentario($_POST['area']);
        $blog->setImagen($nameFile);

        $manObj->insertFile($blog);

        echo "<div class='alert alert-success' role='alert'>
        El archivo $nameFile se a copiado en el directorio uploads 
      </div>";
      echo "<br><a class='btn btn-primary' href='../index.php'>Nueva Entrada</a>";
      echo "\n<a class='btn btn-primary' href='../View/blog.php'>Ver blog</a>";

    }else {

        echo " <div class='alert alert-danger' role='alert'>
        El archivo no se a copiar
        </div> " ;
       
    }

}
  
   




?>