<?php
define("PI", 3.1416);
$nombre = "Martin";
echo "hola mundo $nombre <br>";
echo 'hola mundo ' . $nombre . '<br><br><br>';
$array1 = [3, 10, 36, 255, 79, 24, 5, 8];
$array2 = [2, 5, 8, 11, 16, 21, 30];
$array3 = [ 9, 11, 8, 7, 16, 13, 10, 12];
$array4 = [3, 5, 2, 6, 5, 9, 5, 2, 8];
//echo 'el promedio es ' . promedio($array1) . '<br>';
//echo 'la mediana es ' . mediana($array1) . '<br>';
imprimir($array1);
imprimir($array2);
imprimir($array3);
imprimir($array4);
imprimirT(10);
echo '</br></br>¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.</br>';
echo 'Muestra la información de configuración de PHP en la página y las variables predefinidas en este mismo. Algunos datos son: versión de php, opciones de compilación, extensiones, etc. ';
echo '</br></br>¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción? </br>';
echo '';
echo '</br></br>¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.</br>';
echo '';
echo '<br><br> cambio(grado, 1) o cambio(radianes, 2) 180 grados = ';
echo cambio(180, 1) . ' radianes';
function cambio($num, $opc)
{
    if($opc==1)
    {
        return $num*PI/180; 
    }
    else
    {
        return $num*180/PI;   
    }
}
function imprimirT($num)
{
    echo 'Tabla numero, cuadrado y cubo';
    echo ' <table><thead><th> n^1</th><th> n^2 </font></th> <th> n^3 </font></th></thead><tbody>';
    for($i=0; $i <= $num; $i++)
    {
        echo '<tr>';
        echo'<td>' . $i . '</td>';
        echo'<td>' . $i*$i . '</td>';
        echo'<td>' . $i*$i*$i . '</td>';
        echo '</tr>';
        
    }
    echo '</tbody> </table>';
        
}
function imprimir($numeros)
{
    $length = count($numeros); 
    echo 'arreglo original ';
    for($i=0; $i < $length ; $i++)
    {
        echo $numeros[$i] . ', ';
    }
    echo '<ul>';   
    echo '<li>el promedio es ' . promedio($numeros) . '</li>';
    echo '<li>la mediana es ' . mediana($numeros) . '</li>';
    $aux = ordenar($numeros);
    
    echo '<li>';
    for($i=0; $i < $length ; $i++)
    {
        echo $aux[$i] . ', ';
    }
    echo '</li>';
    
    echo '<li>';
    for($i=($length-1); 0 <= $i ; $i--)
    {
        echo $aux[$i] . ', ';
    }
    echo '</li>';
    
    echo '</ul>';
}
function promedio($numeros)
{
    $length = count($numeros);
    $i = 0;
    $sum=0;
    for($i=0; $i < $length ; $i++)
    {
        $sum = $numeros[$i] + $sum;
    }
    $sum = $sum/$length;
    //echo "promedio: $sum <br>";
    return $sum;
}
function ordenar($numeros)
{
    $i = 0;
    $length = count($numeros);
    $min= minimo($numeros);
    $max= maximo($numeros);
    for($i=0; $i < $length ; $i++)
    {
        $aux[$i]= $numeros[$min];
        $numeros[$min] = $numeros[$max];
        $min= minimo($numeros);
    }
    /*
    for($i=0; $i < $length ; $i++)
    {
        echo $aux[$i] . ', ';
    }
    echo '<br>';*/
    return $aux;
}

function mediana($numeros)
{
    $length = count($numeros);
    $aux = ordenar($numeros);
    $i = 0;
  /*  $min= minimo($numeros);
    $max= maximo($numeros);
    for($i=0; $i < $length ; $i++)
    {
        $aux[$i]= $numeros[$min];
        $numeros[$min] = $numeros[$max];
        $min= minimo($numeros);
    }
    for($i=0; $i < $length ; $i++)
    {
        echo $aux[$i];
    }
    echo '<br>'; */
    if(($length%2)==1)
    {
        //echo $length;
        //echo 'la mediana es ' . $aux[((($length-1)/2)+1)] . "<br>";
        return $aux[((($length-1)/2))];
    }
    else
    {
       // echo 'la mediana es ' . (($aux[((($length-1)/2)+1)]) + $aux[(($length-1)/2)]) /2 . "<br>";
        return (($aux[((($length-1)/2)+1)]) + $aux[(($length-1)/2)]) /2 ;
    }
    
}
function maximo($numeros)
{
    $length = count($numeros);
    $i = 0;
    $max=0;
    for($i=0; $i < $length ; $i++)
    {
        if($numeros[$max]<$numeros[$i])
        {
            $max = $i;
        }
        
    }
    //echo "max: $numeros[$max] <br>";
    return $max;
    
}
function minimo($numeros)
{
    $length = count($numeros);
    $i = 0;
    $min=0;
    for($i=0; $i < $length ; $i++)
    {
        if($numeros[$min]>=$numeros[$i])
        {
            $min = $i;
        }
        
    }
    //echo "min: $numeros[$min] <br>";
    return $min;
}
?>