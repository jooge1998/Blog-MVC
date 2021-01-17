<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Entrada</title>
</head>
<body>
    <div class="container mt-5">

        <form action="Controller/transaciones.php" method="POST" enctype="multipart/form-data">

            <h4 class="mb-3">Nueva Entrada</h4>
            <input class="form-control mb-3" type="text" name="title" placeholder="Titulo" required>
            <input class="form-control mb-3" type="text" name="autor" placeholder="autor" required>
            <textarea class="form-control mb-3" placeholder="Comentario"  name="area" id="" cols="30" rows="8" required></textarea>
            <label for="formFile" class="form-label">Imagen con tamaño inferior a 3MB</label>
            <input class="form-control mb-3" name="file" type="file" id="formFile">

            <input class="btn btn-primary mb-3" name="btn" type="submit" value="Enviar" id="submit" > 
            <br>
            <a  href="view/blog.php">Pagina de visualizacion del blog</a>

        </form>
    </div>

    
</body>
</html>