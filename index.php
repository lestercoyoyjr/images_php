<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Redimensionar Imagenes</h2>

    <form id="form" name="forma" action="procesa.php" method="POST" enctype="multipart/form-data"></form>

    <p>Imagen: </p>

    <input type="file" id="imagen" name="imagen" accept="image/jpeg" required>

    <p>
        <button type="submit">Cargar</button>
    </p>
</body>
</html>