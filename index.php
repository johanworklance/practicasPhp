<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sintasis básica</title>
</head>
<body>
   <?php//etiqueta de apertura php, esto es un comentario
    
    #otro comentario
    
        echo "hola mundo", "otro valor";// es como un document.write de js, esta es la forma literal, pero puede imprimir vario valores separados con coma,pero echo no puede ser guardado en una variable
        echo ("hola mundo");// en parentesis tambien se puede
    
    print "hola mundo2";//otra forma, este solo recibe un solo valor, pero print si se puede guardar en una variable
    
    $caja= print"hola caja";
    
    ?><!--cierre php-->
    
    <?= "hola mundo";//con este igual  es como usar la funcion echo directamente
    /*comentario
    multilinea*/
    ?>
   
   
   <?php 
            $nombre= "johan";
            $edad=25;
    
    echo $nombre.$edad; //se concatena aqui es con el punto .
    
    echo 'mi nombre es '.$nombre.' y tengo '.$edad;
    
    echo "mi nombre es $nombre y tengo $edad de edad";// en php puedes colocar variable entre las "", awesome!
    
    $edadNueva= &$edad; //usando &, esto se le llama variable por referencia, es decir $edadNueva ahora tiene el valor de $edad, y si llega a sufrir cambios $edadNueva tambien hara el cambio para $edad, si no se lo colocamos, $edadNueva solo tomaria el valor de $edad y no le haria cambios cuando la primera sufra cambios
    
    $edadNueva +=7;
    
    echo $edadNueva."<br>";//32
    echo $edad;//ahora vale 32, por el cambio de $edadNueva
    
    
  //---------------------------constante
    
    define("CAJA","hola mundo",false);//Se declaran con el metodo define, el false indica que el uso de la constante debe ser en mayuscula, si colocamos true, lo vuelve no sensible, es decir podemos usar
    
    echo CAJA;//CaJA servriria con el true en el tercer parametro
    
    $arimetica= 5**2;//el unico operador que cambia con respecto a js, es la exponenciacion, aqui es con **, en js era ^
    //----------------------------------------------
    
    
    echo $arimetica;//25
    
    
    $caja= "hola ";
    $caja2= "mundo";
    
    echo $caja.$caja2;//hola mundo
    
    echo $caja;//hola
    
    echo $caja.=$caja2;//hola mundo el .= reasigna y concatena
    
    echo $caja;//hola mundo
    
    
    
    
    
    
    
    ?>
   
   
   
   
    
</body>
</html>