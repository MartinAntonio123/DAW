<?php
    function connect() {
        $mysql = mysqli_connect("localhost","root","","tienda"); //root si estan en local
        $mysql->set_charset("utf8");
        return $mysql;
    }
    
    function disconnect($mysql) {
        mysqli_close($mysql);
    }
    
    function login($user, $passwd) {
        $db = connect();
        if ($db != NULL) {
            
            //Specification of the SQL query
            $query='SELECT nombre FROM usuarios WHERE nombre="'.$user.
                '" AND password="'.$passwd.'"';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
             // cycle to explode every line of the results
             
            if (mysqli_num_rows($results) > 0)  {
                // it releases the associated results
                mysqli_free_result($results);
                disconnect($db);
                return true;
            }
            return false;
        } 
        return false;
    }
    function buscarUsuario($nombre, $sexo, $trabajo)
    {
        echo ' <br> funcion??????????? <br>';
        echo 'sexo '.$sexo . '<br>';
        echo 'nombre '.$nombre. '<br>';
        echo 'trabajo ' .$trabajo. '<br>';
        $db = connect();
        $op = 0;
        //Specification of the SQL query
        $query='SELECT Nombre, trabajo, sexo FROM usuarios';// WHERE nombre="'.$nombre. '"';
        
        if($_POST["sex"] != "NULL")
        {
            if($op == 0)
            {
               $query = $query . ' WHERE sexo="'.$sexo. '"';
               $op = 1; 
            }
            else{
                $query = $query . ' AND sexo="'.$sexo. '"';
            }
        }
        if($_POST["name"] != "NULL")
        {
            if($op == 0)
            {
               $query = $query . ' WHERE nombre="'.$nombre. '"';
               $op = 1;
            }
            else{
                $query = $query . ' AND nombre="'.$nombre. '"';
            }
        }
        if($_POST["trabajo"]  != "NULL")
        {
            if($op == 0)
            {
               $query = $query . ' WHERE trabajo="'.$trabajo. '"';
               $op = 1;
            }
            else{
                $query = $query . ' AND trabajo="'.$trabajo. '"';
            }
        }
        
         // Query execution; returns identifier of the result group
        $results = mysqli_query($db, $query);
         // cycle to explode every line of the results
        disconnect($db);

        if(mysqli_num_rows($results) > 0)
        {
            echo '<table class="table">';
            echo '<tr><td>Nombre</td><td>Sexo</td><td>Trabajo</td></tr>';
            while($row = mysqli_fetch_assoc($results))
            {
                echo '<tr><td>' .$row['Nombre']. '</td><td>'. $row['trabajo']. '</td><td>'. $row['sexo'] .'</td></tr>';
            }
            echo '</table>';
        }
        return true;
    }
    function insertarUsuario($nombre, $password, $trabajo, $sexo)
    {
        $db = connect();
        $query = 'INSERT INTO usuarios (Nombre, password, trabajo, sexo) VALUES ("' .$nombre. '","'. $password. '","' .$trabajo. '","' .$sexo. '")';
        //echo $query;
        if ($db->query($query) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $query . "<br>" . $db->error;
        }
        disconnect($db);
    }
    function delateName($nombre)
    {
        $db = connect();
        //echo $nombre;
        $query = 'DELETE FROM usuarios WHERE Nombre = "'.$nombre.'"';
        if ($db->query($query) === TRUE) {
            echo "borrado completo";
        } 
        else {
            echo "Error: " . $query . "<br>" . $db->error;
        }
        disconnect($db);
    }
    function changePw($nombre, $pw)
    {
        $db = connect();
        //echo $nombre;
        $query = 'UPDATE usuarios SET password = "'.$pw.'" WHERE Nombre = "'.$nombre.'"';
        if ($db->query($query) === TRUE) {
            echo "password actualizado";
        } 
        else {
            echo "Error: " . $query . "<br>" . $db->error;
        }
        disconnect($db);
    }
?>