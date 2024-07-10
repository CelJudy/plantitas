<?php
$ruta='archivos';

if ($handle = opendir($ruta)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "$entry<br>";
        }
    }
    closedir($handle);
}
?>

<form method="POST" action="cargar.php" enctype="multipart/form-data">
    <input type="file" name="archivo" id="archivo">
    <input type="submit">
</form>