<?php require "cabecera.php"?>
    <section>
        <?php
        
            $frase="El veloz murcielago hindu comia feliz cardillo y wiki";

            
   /* $frase_array= explode(' ',$frase);//convierte una string en un array, en el primer parametro indicamos bajo que caracter se separara los valores, aqui un espacio
    //$frase_array= explode(' ',$frase,3); si colocamos el tercer parametro solo guardara hasta ese numero de posiciones, ejemplo, 0 seria el, 1 seria veloz, y 2 seria todo el resto del string que quedo
    
print_r($frase_array);//con print_r muestra como es el array en si

            echo "<br>$frase_array[1]";//veloz

$fraseString= implode(" ",$frase_array);//convierte un array en cadena de texto de nuevo, en el primer parametro con que caracter separaremos las posiciones que tenia el array, join es su alias

echo "<br> $fraseString";

echo "<br>" .lcfirst($frase);//pasa el primer caracter a minusculas

//ltrim elimina los espacios al inicio de un string, u otros caracteres, tambien esta rtrim, y trim, este ultimo elimina al inicio y al final, y rtrim el final, son  left y right

echo "<br>" .md5($frase);//calcula un algoritmo que convierte al string en una serie de numeros, puede ser usado para cifrar contraseñas, pero ya no se usa

$base= "mivariable1=este es el valor&mivariable2=valor2&miArray[]=valor1&miArray[]=valor2&miArray[fruta]=manzana";

parse_str($base);//declara variables a partir de un string, si son muchas variables, el string debe separarlas con &
echo "<br>";
echo $mivariable1;
echo "<br>";
echo $mivariable2;
echo "<br>";
echo $miArray[0];//valor1
echo "<br>";
echo $miArray[1];//valor2
echo "<br>";
echo $miArray["fruta"];//manzana
echo "<br>";

echo $frase;
$resultadoStrReplace= str_replace('feliz','triste',$frase,$conteo);//reemplaza una cadena por otra (cadena,reemplazo,el string,variable para contar cuantas veces encontro y pudo hacer el cambio), tambien esta str_ireplace es igual pero no es casesensitive
echo "<br>";
echo $resultadoStrReplace;
echo "<br>";
echo $conteo;

echo "<br>";

echo str_repeat($frase."<br>",2); //repite un string, (el string,numero de veces)



$frase_desordenada= str_shuffle($frase);//desordena los caracteres en un string, da errores si hay acentos

echo "<br>";

echo $frase_desordenada;

echo "<br>";

$arr1= str_split($frase);//separa un string en un array, parecido al explode, pero este separa por caracteres

print_r($arr1);

$arr2= str_split($frase,2);//o por el numero de caracteres que indiquemos contando los espacios
echo "<br>";
echo "<br>";
print_r($arr2);
echo "<br>";
echo $arr2[3];//oz*/

//strip_tags() retira las etiquetas html y php de un string, eso es mas que todo para no recibir un formulario con dichos elementos

$longitudString= strlen($frase);//cuentas los caracteres de un string, con espacios y todo, pero no sirve para arrays

echo $longitudString;
echo "<br>";
echo strrev($frase);//coloca la frase al revez

echo "<br>";

echo strtolower($frase);//todo a minusculas
echo "<br>";
echo strtoupper($frase);//todo a mayusculas
echo "<br>";

echo substr_count($frase,'el');//numero de veces que aparece un string (el string, el substring, o string a buscar)
echo "<br>";
echo substr_count($frase,'el',5,3);//el tercer parametro indica desde que caracter va a buscar, y el 4 parametro indica hasta que caracter final buscara es decir comienza en la pos 5 y de hay solo avanzara 3 caracteres mas, no podemos indicar en este 4 parametro un numero mayor a la longitud del string donde se buscara el subtring
echo "<br>";
$resultado= substr($frase,5,3);//saca un substring desde la posicion que le indiquemos, y mostrara todo de hay en adelante, si indicamos el tercero, buscara hasta ese numero de caracteres, puden ser valores negativos, los cuales ellos se lleen desde la derecha

echo $resultado;//loz
echo "<br>";
echo ucfirst($frase);//primera letra en mayuscula
echo "<br>";
echo ucwords($frase);//primera letras de cada palabra en mayuscula


echo "<br>";

$a = wordwrap($frase,8,"<br>",true);//rompe un string en palabras, separandolas con el tercer caracter que puede ser un espacio una etiqueta br, ect, la cosa es que si por ejemplo una palabra tuviera mas caracteres que el que indico en el segundo parametro, y si tenemos a true el 4 parametro rompera la palabra en 2 y las separara con lo del tercer parametro, si el 4 valor es false, no rompera la palabra, tambien si 2 palabras caben dentro de ejemplo 8 caracteres estas no se separaran

echo $a;








    
        ?>
    </section>
 
<?php require "pie.php";