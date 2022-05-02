<?php
    $destino = "img/foto.jpg";

    $nAncho = 400;
    $nAlto = 400;

    if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {

        $imagen_original = $_FILES['imagen']['tmp_name'];

        $img_original = imagecreatefromjpeg($imagen_original);
        $ancho_original = imagesx($img_original);
        $alto_original = imagesy($img_original);

        $tmp = imagecreatetruecolor($nAncho, $nAlto);

        imagecopyresized($tmp, $img_original, 0, 0, 0, 0, $nAncho, $nAlto, $ancho_original, $alto_original);

        imagejpeg($tmp, $destino, 100);

        header("Content-type: image/jpeg");
        imagejpeg($tmp);

    }
?>