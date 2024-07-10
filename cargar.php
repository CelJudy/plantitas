<?php
$ruta = "archivos/";
$archivo = $ruta . basename($_FILES["archivo"]["name"]);

move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);

header('Location: archivos.php');