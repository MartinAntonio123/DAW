<?php
require_once "util.php";
$busqueda=strtolower($_GET['USUARIO']);
$results=getAll($busqueda);
if(mysqli_num_rows($results) > 0)
    echo '1';
else
    echo '0';

?>