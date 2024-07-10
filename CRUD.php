<?php
    require 'bd.php';
    $result=select("select * from libros");
?>

<table>
<tr>
    <td>id</td>
    <td>titulo</td>
    <td>autor</td>
    <td>precio</td>
    <td>paginas</td>
</tr>
<?php
    while ($row = pg_fetch_row($result)) {
        echo "<tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
        </tr>";
    }
?>
</table>

<form method="post" action="guardar_libro.php">
    ISBN<input type="text">
    Titulo<input type="text">
    Autor<input type="text">
    Precio<input type="text">
    Pagina<input type="text">
    <input type="submit">
</form>