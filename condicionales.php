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
        
        $a=5;
        $b="5";
        
        if($a==$b){
            echo "son iguales";//true
        }
        
        if($a===$b){
            echo "no son iguales";
        }//false
        if($a!=$b){
            echo "no son iguales";
        }//false
        if($a!==$b){//recordar es el negado de ===
            echo "son iguales";//true
        }
        
        $a= 4>3;//lo de que las variables puedan ser condiciones, es algo que casi no he hecho
        $b= 50>30;
        if($a && $b){//tambien se puede usar la palabra and
            echo "se ha ejecutado por que es true la condicion";
        }
        
        //por cierto en php en el else if de js, aqui es escribe pegado, elseif
        
        
        //todo los demas son iguales en js
        ?>
    </section>
    
</body>
</html>