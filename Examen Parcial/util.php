<?php
    function connectDb(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "examenparcial";
        
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
    function insertRegister($code, $status){
        $conn = connectDb();
        $sql  = "INSERT INTO registros (codigo, sufa) VALUES( '".$code."', '".$status. "')";
        $result = mysqli_query($conn, $sql);
        closeDb($conn);
        return $result;
    }
    function searchAll(){
        $conn = connectDb();
        $sql  = "SELECT * from registros";
        $result = mysqli_query($conn, $sql);
        closeDb($conn);
        return $result;
    }
    function searchFail(){
        $conn = connectDb();
        $sql  = "SELECT fecha from registros WHERE sufa='SYSTEMFAILURE'";
        $result = mysqli_query($conn, $sql);
        closeDb($conn);
        return $result;
    }
    function searchSuccess(){
        $conn = connectDb();
        $sql  = "SELECT fecha from registros WHERE sufa='success'";
        $result = mysqli_query($conn, $sql);
        closeDb($conn);
        return $result;
    }
?>