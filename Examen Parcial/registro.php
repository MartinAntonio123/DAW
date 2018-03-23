<?php
require_once "util.php";
echo '<br>registro hecho<br>';
session_start();

//$_POST['code']= '4 8 15 16 23 42';

if(empty($_SESSION))
{
    echo '<br>no session<br>';
    insertRegister("", "SYSTEMFAILURE");
}
else{

switch ($_POST['code'])
{
    case '4 8 15 16 23 42':
        insertRegister($_POST['code'], "success");
        echo '<br>session s<br>';
        break;
    default:
        insertRegister($_POST['code'], "SYSTEMFAILURE");
        echo '<br>session f<br>';
        break;
}
    
}
?>