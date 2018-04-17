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
        
        $b=0;
        
        while($b<=10){
            
            switch($b){
                case 4:
                    break 2;//el continue y break son iguales que en js, pero esto de aqui es nuevo, con este 2 hacemos que este break valga para el while entero, por lo que en la iteracion 4, se terminara el while, si solo dejamos break; este solo funcionaria dentro del switch, y no haria ningun cambio en el while, y mostraria las 10 iteraciones normalmente, ese 2 es como para que tenga un mayor ambito
            }
            
            $b++;
            echo"iteracion $b";
            
        }
        
        
        
        
        ?>
    </section>
    
</body>
</html>