<?php require "cabecera.php"?>
<section>
    <?php
    /*//$a;
    //$a="";
    //$a=0;
//$a=null;
$a= false;
$a=[];
    
    if(empty($a)){//empty mandara true si la variable a evaluar es cualquiera de las declaraciones anteriores
        echo "la variable esta vacia";
    }*/
    
    
    /*$a="35plz";
    $b=true;
    
echo gettype($a);//string
echo gettype($b);//boolean

settype($a,'integer');//el settype elimnara las letras de un string para convertir los numeros a integer
settype($b,'string');//dara 1, true como string es un 1
    
echo gettype($a);//integer 
echo gettype($b);//string

echo "<br> $a $b";//35 y 1
    */
    
    
   /* $a=[];

if(is_array($a)){//evaluamos si es un array, es como un gettype($a)=='array'
    echo "correcto";
}

//hay mas is_bool,is_float,is_int,is_integer,is_long,is_null,is_numeric,is_object,is_real,is_resource,is_scalar,is_string*/

    
   /* $a='';
    $b=['a','b'=>null,[]];

if(isset($a)){
    echo "esta declarada o definida";//es la contrario de empty, pide que la variable ya tenga una asignacion, null no lo cuenta, un array vacio si
    
}*/

/*
var_dump(isset($a));//var dump, nos mostrara true, que es lo que isset esta enviando

var_dump($b);//array(3) { [0]=> string(1) "a" ["b"]=> NULL [1]=> array(0) { } }, vardump detalla completamente lo que le enviemos en el parentesis, una variable, lo que retorne una funcion etc
echo "<br>";
var_export($b);//array ( 0 => 'a', 'b' => NULL, 1 => array ( ), )es parecido a vardump, pero devuelve un string de de la variable, es como si devolviera con que codigo se creo la variable a evaluar, puede servirnos para reusarlo
echo "<br>";
print_r($b);//es como el var dump, pero con menos info
echo "<br>";
$nombre='johan';

echo $nombre;
echo "<br>";
unset($nombre);//unset destruye variables

echo $nombre;//error no esta definida por culpa del unset
*/
$b=25;
echo $b;

function destruir(){
    //global $b;
    
    unset($GLOBALS['b']);//para que unset destruya variables globales dentro de una funcion debemos usar el array $GLOBALS ya que la palabra global no sirve
}

destruir();

echo $b;





    ?>
    
</section>

<?php require "pie.php"?>