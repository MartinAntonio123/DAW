<?php
   /* name email username password confirm */
    require_once("modelo.php");
    function _e($string)
    {
        htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
    if($_POST["job"]=="" || $_POST["password"]=="" || $_POST["nomb"]=="" || $_POST["sex"]=="NULL" || $_POST["confirm"]=="")
    {
        echo 'Error, todos los campos se deben llenar';
    }
    else if($_POST["password"] != $_POST["confirm"])
    {
        echo 'Error, las contrasenas deben coincidir';
    }
    else if(strlen($_POST["password"])<6)
    {
        echo 'Error, contrasena debe contar con al menos 6 caracteres';
    }
    else{
        include("partials/_header.html");
        //echo 'nombre = '.$_POST["nomb"]. '<br>';
        insertarUsuario($_POST["nomb"], $_POST["password"], $_POST["job"], $_POST["sex"]);
        include("partials/_botonIniciarSesion.html");
        include("partials/_imagenPrincipal.html"); 
        include("partials/_footer.html");
    }
?>