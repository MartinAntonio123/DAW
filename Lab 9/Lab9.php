<?php
$nombre = "Martin";
echo "hola mundo $nombre <br>";
echo 'hola mundo ' . $nombre . '<br>';
$array1 = [3, 10, 36, 255, 79, 24, 5, 8];
//echo 'el promedio es ' . promedio($array1) . '<br>';
//echo 'la mediana es ' . mediana($array1) . '<br>';
imprimir($array1);

function imprimir($numeros)
{
    $length = count($numeros); 
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