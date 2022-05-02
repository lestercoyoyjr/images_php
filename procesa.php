<?php
    $destino = "img/fotov.jpg";

    $nAncho = 600;
    $nAlto = 400;

    if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {

        $imagen_original = $_FILES['imagen']['tmp_name'];

        $img_original = imagecreatefromjpeg($imagen_original);
        $ancho_original = imagesx($img_original);
        $alto_original = imagesy($img_original);

        if ($ancho_original <= $nAncho && $alto_original <= $nAlto) {
            move_uploaded_file($imagen_original, $destino);
        } else {

            if ($ancho_original >= $alto_original) {
                // horizantal
                $nAncho = $nAncho;
                $nAlto = ($nAncho * $alto_original)/ $ancho_original;
            } else {
                // vertical
                $nAlto = $nAlto;
                $nAncho = ($ancho_original / $alto_original) * $nAlto;
            }
            $tmp = imagecreatetruecolor($nAncho, $nAlto);

            imagecopyresampled($tmp, $img_original, 0, 0, 0, 0, $nAncho, $nAlto, $ancho_original, $alto_original);

            imagejpeg($tmp, $destino, 100);

            header("Content-type: image/jpeg");
            imagejpeg($tmp);
        }
    }
?>