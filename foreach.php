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
        
        $colores=["azul","verde","rojo","amarillo","marron","naranja"];
        
        for($x=0;x<count($colores);x++){//en js era .lenght, aqui es un metodo llamado count donde en parentesis le enviamos el array, del que queresmo saber cuantas posiciones tiene
            echo "$colores[x]";
        }
        
        foreach($colores as $clave => $valor){//la varibale valor es como un $colores[i], es chevere este foreach, se parece al for in de js, y la clave es como si fuera solo la i, es decir el nombre de clave que en colores son numeros 0,1 y asi
            echo "$valor <br>";//por eso aqui solo usmaos la variable en si, es como si por cada iteracion $valor[0], y asi sucesivamente, es como si el fuera un nuevo array
        }
        
    
        
        
        
        
        
        
        ?>
    </section>
    
</body>
</html>