<?php
    function connectDb(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tienda";
        
        $con = mysqli_connect($servername, $username, $password, $dbname);
        
        //checar conexion
        if(!$con){
            die("Conexion fallida : " . mysqli_connect_error() );
        }
        $con->set_charset("utf8");
        return $con;
    }
    //la variable $mysql es una conexion establecida anteriormente
    function closeDB($mysql){
        mysqli_close($mysql);
    }
    
    //obtener todos los datos de la base de datos
    function getName(){
        $conn = connectDb();
        $sql  = "SELECT Nombre FROM usuarios  ";
        $result = mysqli_query($conn, $sql);
        $i = 0;
        if($conn != NULL){
            while($fila = mysqli_fetch_array($result)){
                $words [$i] = $fila["Nombre"];
                $i++;
            }
        }
        
        closeDb($conn);
        return $words;
    }
    function getAll($nombre){
        $conn = connectDb();
        $sql  = "SELECT ID, Nombre, password, sexo, trabajo FROM usuarios WHERE Nombre='".$nombre. "'";
        $result = mysqli_query($conn, $sql);
        closeDb($conn);
        return $result;
    }

?>