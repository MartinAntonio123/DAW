<?php
    require_once("modelo.php");
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
    //echo  $_SESSION["username"]  . ' ' . $_SESSION["password"] ;
    if(login($_SESSION["username"], $_SESSION["password"]))
    {
        include("partials/_header.html");
     
        include("partials/_infoUser.html");
        
        include("partials/_buscarUsuario.html");
        if(($_POST["sex"])== 'NULL')
        {
            $_POST["sex"] = "n";
        }
        buscarUsuario($_POST["name"], $_POST["sex"], $_POST["trabajo"]);
        
        include("partials/_imagenPrincipal.html"); 
        include("partials/_footer.html");
    }
    else if($_SESSION["username"]=="" || $_SESSION["password"]=="")
    {
        echo 'Error, todos los campos se deben llenar';
    }
    else{
        echo 'Error, usuario o password incorrectos';
    }
?>