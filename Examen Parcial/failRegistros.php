<?php
require_once "util.php";
$results=searchAll();
if(mysqli_num_rows($results) > 0)
{
    echo '<table class="table"><tr><th>codigo</th> <th>Fecha</th><th>S/F</th> </tr>';
    while($fila = mysqli_fetch_array($results)){
        echo '<tr><td>'.$fila["codigo"].'</td><td>'.$fila["fecha"].'</td><td>'.$fila["sufa"].'</td></tr>';
    }
    echo '</table>';
}

?>