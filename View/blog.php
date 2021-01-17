<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">


    <title>Blog</title>
</head>
<body>
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Large</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>

    </header>

<div class="nav-scroller py-1 mb-2">
  <nav class="nav d-flex justify-content-between">
    <a class="p-2 link-secondary" href="#">World</a>
    <a class="p-2 link-secondary" href="#">U.S.</a>
    <a class="p-2 link-secondary" href="#">Technology</a>
    <a class="p-2 link-secondary" href="#">Design</a>
    <a class="p-2 link-secondary" href="#">Culture</a>
    <a class="p-2 link-secondary" href="#">Business</a>
    <a class="p-2 link-secondary" href="#">Politics</a>
    <a class="p-2 link-secondary" href="#">Opinion</a>
    <a class="p-2 link-secondary" href="#">Science</a>
    <a class="p-2 link-secondary" href="#">Health</a>
    <a class="p-2 link-secondary" href="#">Style</a>
    <a class="p-2 link-secondary" href="#">Travel</a>
  </nav>
</div>
</div>
<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

    <div class="container mt-3">
      

    <?php
        require_once '../Controller/transaciones.php';

        if (empty($tablaBlod)) {
            echo "No hay entradas en el blog"  ;
        } else {
        
           foreach ($tablaBlod as $r => $value) {
               echo "<hr><article class='blog-post mt-3'>";
              echo "<h2 class='blog-post-title' >" . $tablaBlod[$r]->getTitulo() ."</h2>";
              echo"<p class='blog-post-meta'>"
              . $tablaBlod[$r]->getFecha()  . " by <a href='#'>". $tablaBlod[$r]->getAutor(). "</a>
              </p>";
              if ($tablaBlod[$r]->getImagen() != "") {
                  echo  "<img class='rounded' src='../uploads/". $tablaBlod[$r]->getImagen() ."'  width='300px'>";
              }
              echo "<p>" . $tablaBlod[$r]->getComentario()  . "</p></article>";            
          } 
        }        

    ?>

<a class="btn btn-primary mb-4" href="../index.php">Nueva Entrada</a>


</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>