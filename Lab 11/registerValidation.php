<?php
   /* name email username password confirm */
    function _e($string)
    {
        htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
    /*echo _e($_POST["username"]);*/
    $_POST["username"] = _e($_POST["username"]);
    $_POST["password"] = _e($_POST["password"]); 
    $_POST["name"] = _e($_POST["name"]);
    $_POST["email"] = _e($_POST["email"]); 
    $_POST["confirm"] = _e($_POST["confirm"]); 
    if($_POST["username"]=="" || $_POST["password"]=="" || $_POST["name"]="" || $_POST["email"]=="" || $_POST["confirm"]=="")
    {
        echo 'Error, todos los campos se deben llenar';
    }
    else if($_POST["password"] != $_POST["confirm"])
    {
        echo 'Error, las contrasenas deben coincidir';
    }
    else if(strlen($_POST["password"])<6)
    {
        echo 'Error, contrasena deve contar con al menos 6 caracteres';
    }
    else if(strpos('@',$_POST["email"]))
    {
        echo 'Error, ingresa un email valido';
    }
    else{
        include("partials/_header.html");
        echo 'Cuenta creada!!!! </br> </br>';
        include("partials/_botonIniciarSesion.html");
        include("partials/_imagenPrincipal.html"); 
        include("partials/_footer.html");
    }
?>