<?php require "cabecera.php"?>
    <section>
        <?php
        
    function escribir($arg, $callback=null){//en php , no se permite que una funcion no reciba todos sus parametros, por lo que si solo le enviamos $arg en la llamada de escribir, el otro parametro debemos asignarle null, en js esto no se hace
    echo $arg;
    if($callback != null){//con esta condicion, podemos hacer que la funcion escribir, pueda recibir un solo parametro
        if(gettype($callback)=='object'){//gettype devuelve el tipo de variable, aqui en php las funciones son tipo object
            $callback();
        }else{
            echo "error: no estas enviando una funcion como parametro";
            exit();//este metodo cierra el flujo de ejecucion de php
        }
    }
}
    //escribir("hola mundo");//aqui solo ejecutaria el echo $arg dentro de escribir
    $callback= function(){
        echo " mundo";
    };

    escribir("hola",$callback);//solo se pueden enviar funciones que hayan sido asignadas a variables, o una funcion anonima tambien sirve
    
        ?>
    </section>
 
<?php require "pie.php";