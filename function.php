<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <style>
        section{
            border: 2px solid black;
            padding: 10px;
            background: aqua;
            margin-bottom: 10px;
        }
    </style>
    <section>
        <?php
        //es igual que en js excepto por
        
        function por5($num1, $num2=5){//variable por defecto, no necesitamos enviarla por parametro en la llamada
            return $num1*$num2;
        }
        
        echo por5(3);//15,
        
        function incremento(&$num1){//la cosa es que si especificamos aqui en el paso de parametros que la variable es por referencia es decir que tenga el & entonces el no borrara la variable cada que llamemos a esta funcion por lo que incrementara su valor cada vez, es como lo que haciamos con los clousures en js
            return  echo $num1++;
        
        }
        
        $numero=5;
        
        incremento($numero);//5 recordar que el num1++ solo suma en la siguiente linea
        incremento($numero);//6
        incremento($numero);//7
        incremento($numero);//8
        
        
        $miFuncion= function(){
            echo "hola";
        };//recordar que en php es estricto con los ; aqui como asignamos una funcion anonima a una variable debemos terminar la sentencia con ;
        $miFuncion();
        
        (function(){//function autoejecutable como en js
            echo"mundo"
        })();
        
        function crearSuma($n){
            return function($m) use ($n){//clousure funcion que retorna otra funcion, con una diferencia debemos indicar que parametro de la funcion padre, si es que tiene debe usar con el namespace = use, en js no se hace esto
                return $n+$m;
            }
        }
        
        $suma15= crearSuma(15);//aqui $suma15, es ahora un metood porque?, porque el llamado de crearSuma(15) esta retornando el codigo de la funcion clousure, y se lo asignamos a $suma15
        
        $suma25= crearSuma(25);
        
        echo $suma15(7);//22
        echo $suma25(3);//28
        
        
        
        
        
        
        
         
        
        
        ?>
    </section>
    
</body>
</html>