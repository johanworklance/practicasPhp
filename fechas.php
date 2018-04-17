<?php require "cabecera.php"?>
<section>
    
    <?php
    
/*    
    
    echo time();//fecha en tiempo unix, segundos que han pasado desde el año 1970 del primero de enero
echo "<br>";
echo date(DATE_RSS);//esta funcion necesita 1 parametro al menos, DATE_RSS es una constante de php que contiene algunos parametros de fechas como D que da el dia en palabra, y otras mas
echo "<br>";
echo date('d F Y')." ".date('g:i:s a');//d dia en numero, F el mes, y Y el año, g hora, i minuto, s segundgos y a de (am,pm)

$dia= date('l',0);
$dia_n= date('d',0);//si no especifiamos el segundo parametro mostrara el tiempo actual, el cero indica el primer valor es decir 1 de enero de 1970, ese parametro es en segundos, cualquier fecha que queramos mostrar se debe indicar en segundos, por ejemplo time() devuelve en segundos la fecha actual tambien serviria
$mes= date('F',0);
$año= date('Y',0);
$hora= date('g',0);//respecto a la hora, esta toma la que esta en el php.ini
$minutos= date('i',0);
$segundos=date('s',0);
$meridiano=date('a',0);
echo "<br>";
echo "hoy es $dia $dia_n del $mes del $año y son las $hora:$minutos:$segundos $meridiano";

echo "<br>";


$fecha= getdate();//devuelve la fecha actual con un array de valores asociativos, con valores como wday que es el dia de la semana pero en numero comenzando en 0, y otros mas

foreach($fecha as $clave=>$valor){
    echo "$clave=$valor <br>";
}

$meses=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];

$mes2=$meses[$fecha['mon']-1];//con esto podremos imprimir el mes actual pero en español, recordar que $fecha['mon'] nos manda el mes 4, pero en el array $meses, el indice de abril es 3, por que enero es un 0

$diasSEMANA=["domingo","lunes","martes","miercoles","jueves","viernes","sabado"];

    $dia2= $diasSEMANA[$fecha['wday']];//wday tiene 0 que es domingo, 

echo $dia2;
echo "<br>";
echo $mes2;
echo "<br>";
echo "hoy es $dia2 de $mes2 del 2018";

echo date_default_timezone_get();//con este vemos la zona horaria del php.ini
date_default_timezone_set('America/Caracas');//y con este la cambiamos enphp.net estan todas
echo "<br>";
echo date_default_timezone_get();


//por cierto ya cambien el timezone en el php.ini date.timezone=America/Caracas

echo "<br>";
$zonas= DateTimeZone::ListIdentifiers();//devuelve un array con todas las zonas horarias, DateTimeZone es una class de php
$a=0;
foreach($zonas as $z){
    $a++;
    echo "$a $z <br>";
}*/
/*
$meses=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];

$diasSEMANA=["domingo","lunes","martes","miercoles","jueves","viernes","sabado"];
*/


/*

$cumple= mktime(0,0,0,7,11,1991);//obtiene la fecha que le indiquemos en formato unix, es decir segundos desde enero de 1970
$hoy= time();//y como time devuelve la fecha actual
$edad=$hoy-$cumple;//pues la fecha actual menos el dia de nacimientos es igual a mi edad en segundos
$fecha=getdate($cumple);

$diaNacimiento=$diasSEMANA[$fecha['wday']];
$diaNum=$fecha['mday'];
$mesNacimiento=$meses[$fecha['mon']-1];

echo $cumple;
echo "<br>";
echo $edad;
echo "<br>";
echo "naciste un $diaNacimiento $diaNum de $mesNacimiento del año {$fecha['year']}";

echo"<p> has vivido aproximadamente ".floor($edad/60/60/24)." dias";//$edad en segundos entre segundos, minutos y horas del dia
echo"<p> tu edad aproximadamente ".floor($edad/60/60/24/365)." años";//los dias del año
*/

    $fecha="15/04/2018";

$f= explode('/',$fecha);//recordar explode convierte un string a array, aqui serian 3 posiciones

if(count($f)!=3){
    echo"la fecha esta incorrecta ejemplo, dd/mm/aaaa 15/04/2018 ";
    exit;
}elseif(checkdate($f[1],$f[0],$f[2])== false){//checkmate verifica que una fecha es correcta, por ejemplo si el mes fuera 25 mandaria false, por que no hay mas de 12 meses, por cierto el recibe de parametros mm/dd/aaaa, por eso cambie el indice del array $f
        echo "la fecha esta erronea";
}else{
        echo "todo esta bien, la fecha: $fecha es correcta";
}
        
    





    ?>
    
    
    
    
</section>


<?php require "pie.php"?>