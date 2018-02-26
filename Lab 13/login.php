<?php
    function _e($string) {
      echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
      //echo htmlentities($string, ENT_QUOTES, 'UTF-8');
    }
    session_start();
    if(empty ($_SESSION["username"]))
    {
        if(empty($_POST["username"]))
        {
            header('Location: index.php');
        }
        else
        {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
        }
    }

    if($_SESSION["username"]!="" && (strlen($_SESSION["password"])>5))
    {
        include("partials/_header.html");
       /* echo 'Bienvenido ' ;
        _e($_SESSION["username"]) ;
        echo '!!! </br> </br>';*/
        include("partials/_infoUser.html");
        include("partials/_imagenPrincipal.html"); 
        include("partials/_footer.html");
    }
    else if($_SESSION["username"]=="" || $_SESSION["password"]=="")
    {
        echo 'Error, todos los campos se deben llenar';
    }
    else{
        echo 'Error, la contraseña debe contar con al menos 6 caracteres';
    }
?>