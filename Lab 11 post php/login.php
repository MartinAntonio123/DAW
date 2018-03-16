<?php
    function _e($string)
    {
        htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
    /*echo _e($_POST["username"]);*/
    $_POST["username"] = _e($_POST["username"]);
    $_POST["password"] = _e($_POST["password"]);
    if($_POST["username"]!="" && (strlen($_POST["password"])>5))
    {
        include("partials/_header.html");
        echo 'Bienvenido ' . $_POST["username"] . '!!! </br> </br>';
        include("partials/_imagenPrincipal.html"); 
        include("partials/_footer.html");
    }
    else if($_POST["username"]=="" || $_POST["password"]=="")
    {
        echo 'Error, todos los campos se deben llenar';
    }
    else{
        echo 'Error, la contraseña debe contar con al menos 6 caracteres';
    }
?>