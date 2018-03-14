<?php
require_once "util.php";
    
    $pattern=strtolower($_GET['pattern']);
    $results = getAll($pattern);
   /* $response="";
    for($i=0; $i<count($words); $i++)
    {
       $pos=stripos(strtolower($words[$i]),$pattern);
       if(!($pos===false))
       {
         $size++;
         $word=$words[$i];
         $response.="<option value=\"$word\">$word</option>";
       }
    }*/
  if(mysqli_num_rows($results) > 0)
        {
            echo 'hola a ajax 2 func';
            echo '<table class="table">';
            echo '<tr><td>Nombre</td><td>Sexo</td><td>Trabajo</td></tr>';
            while($row = mysqli_fetch_assoc($results))
            {
                echo '<tr><td>' .$row['Nombre']. '</td><td>'. $row['trabajo']. '</td><td>'. $row['sexo'] .'</td></tr>';
            }
            echo '</table>';
        }
?>