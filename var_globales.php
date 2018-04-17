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
        
        
        $nomb="alexis";
        
        function saludar(){
            //$nombre=johan; variable local en esta funcion
            
            global $nomb;//solo asi hacemos que la variable $nombre que esta afuera de la funcion, tenga ambito aqui adentro, en js no es necesario esto
            
            $hola= "hola $nomb";
            
            return  $hola;
             
        }
        
        
         echo saludar();
        
        
        
        $a= 2;
        $b="texto";
        $c=45;
        $hola= "hola ";
        $mundo="mundo";
        
        echo "<br>".$GLOBALS['a'];//2
        
        echo "<br>".$GLOBALS['hola'].$GLOBALS['mundo'];//hola mundo, la variable $GLOBALS, es un array asociativo que guardad todas las variables declaradas globales, sus nombres pasan a ser la clave asociativa
        
        $nombre= "johan";
        
        function decirNombre(){
            
            $nombre= $GLOBALS['nombre'];//asi tambien podriamos usar lass variables globales dentro de funciones, si usar el global
            echo "<br>".$nombre;//este es el $nombre dentro de la funcion, no la variable global de afuera, pero este $nombre si que tiene el valor de la variable de afuera
        }
        
        
        decirNombre();
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        ?>
    </section>
    
</body>
</html>