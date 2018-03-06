<?php
require_once("modelo.php");
session_start();
include("partials/_header.html");
echo '<h1> eliminar cuenta </h1> <br> name= '.$_SESSION["username"].'<br>';

delateName( $_SESSION["username"] );

session_unset();

// destroy the session
session_destroy(); 
include("partials/_imagenPrincipal.html"); 
include("partials/_footer.html");

?>