<?php
require_once "util.php";
$results=searchFail();
if(mysqli_num_rows($results) > 0)
{
    echo '<table class="table"><tr><th>Fecha</th></tr>';
    while($fila = mysqli_fetch_array($results)){
        echo '<tr><td>'.$fila["fecha"].'</td></tr>';
    }
    echo '</table>';
}

?>