<?php require "cabecera.php"?>
<section>
    <?php
    $a=5.5;

echo $a;

echo "<br>";

echo ceil($a);//6 redondea hacia arriba
echo "<br>";
echo floor($a);//5 redondea hacia abajo
    echo "<br>";
    echo pi();
echo "<br>";
echo M_PI;//tambien es un pi
echo "<br>";

$b=5.9232443;

echo round($b,2);//redondea como los otros pero podemos especificar cuantos decimales queremos que deje si es que hay muchos, aqui da 5.92, es decir que muestra 2 decimales, por defecto ese segundo parametro es 0
echo "<br>";
echo round(5.9,-1);//este es particular, aqui el redondearia es el entero en si, si es 5 o mayor redondeara a 10, si es 4 para abajo redonde a cero

//PHP_ROUND_HALF_UP redondea hacia arriba
//PHP_ROUND_HALF_DOWN redondea hacia abajo
//PHP_ROUND_HALF_EVEN redondea hacia arriba si el siguiente valor es par
//PHP_ROUND_HALF_ODD redondea hacia arriba si el siguiente valor es inpar
echo "<br>";
echo round(7.5,0,PHP_ROUND_HALF_UP);


echo "<br>";

echo sqrt(25);//raiz cuadrada
echo "<br>";
echo pow(3,5);//3 a la 5, exponencial 3*3*3*3*3=243
echo "<br>";
echo 3**5;//literal de la funcion pow

echo "<br>";

echo rand();//numero random desde 0 hasta gerandmax()
echo "<br>";
echo getrandmax();//numero fijo
echo "<br>";

echo rand(1,15);//del 1 al 15
    
echo mt_rand();//numero random pero mejorado
echo "<br>";
echo mt_getrandmax();//numero fijo
echo "<br>";

echo min(20,5,25,12);//minimo de un rango de numeros

$b=[20,5,25,12];
echo "<br>";
echo max($b);//maximo, min y max pueden recibir un array con los valoress

$c=25;
echo "<br>";
var_dump(is_nan($c)) ;//is_nan, si es un Not a number


//tambien hay mas funciones como las trigonometricas, en php.net estan




















































    
echo "<br>";




    ?>
</section>



<?php require "pie.php"?>