<?php require "cabecera.php"?>
<section>
    <?php
        $personas= [
    3575=>['id'=>'3575',
          'nombre'=>'johan',
          'apellido'=>'nieto',
          'edad'=>26,
          'sexo'=>'masculino'],
    3577=>['id'=>'3577',
          'nombre'=>'alexis',
          'apellido'=>'perez',
          'edad'=>28,
          'sexo'=>'masculino'],
    3579=>['id'=>'3579',
          'nombre'=>'laura',
          'apellido'=>'jimenez',
          'edad'=>24,
          'sexo'=>'femenino'],
    3576=>['id'=>'3576',
          'nombre'=>'pablo',
          'apellido'=>'marmol',
          'edad'=>30,
          'sexo'=>'masculino'],
    3578=>['id'=>'3578',
          'nombre'=>'paola',
          'apellido'=>'vera',
          'edad'=>22,
          'sexo'=>'femenino'],
];
    
    function ordenarArray($array,$claveAsociativa,$orden=SORT_ASC){
    $nuevoArray= [];
    $ordenamientoArray=[];
    
    if(count($array)>0){//condicionante por que si, es decir solo enviaremos el array de arriba, pero este script serviria para ordenas otros arrays
        foreach($array as $c1=>$v1){//lo recorremos 
            if(is_array($v1)){//si su valor es otro array, lo recorremos
                foreach($v1 as $c2=>$v2){
                    if($c2==$claveAsociativa){//si por ejemplo la clave es 'nombre' y le mandamos a buscar eso la $claveAsociativa
                        $ordenamientoArray[$c1]= $v2;//entonces este nuevo array valdra 3577=>johan, y asi sucesivamente
                    }
                }
            }else{
                $ordenamientoArray[$c1]=$v1;//si no fue un array, pues guardamos simplemente su valor con la clave que le toca
            }
        }
        switch($orden){
            case SORT_ASC://ordenamiento ascendente
                asort($ordenamientoArray);
                break;
            case SORT_DESC:
                arsort($ordenamientoArray);
                break;
        }
        foreach($ordenamientoArray as $c3=>$v3){
            $nuevoArray[$c3]= $array[$c3];// la cosa es que ordenamientoArray solo esta guardando 3577=>johan, y los demas valores por nombre, entonces este nuevoarray, tendra 3577=> igual al array dentro de $array[3577] 
        }
    }
    return $nuevoArray;
    
}

$ordenemos= ordenarArray($personas,'nombre',SORT_DESC);//recordar ahora esta variable es el array que ordenarArray retorna, aqui tambien enviaremos que los ordene por nombre y descendentemente


    foreach($ordenemos as $c4=>$v4){
        echo str_repeat('--',40);
        echo "<br>Identificacion $c4 <br>";
        echo str_repeat('--',40);
        foreach($v4 as $c5=>$v5 ){
            echo "<br>$c5:$v5 <br>";
        }
    }
    
    
    
    ?>
</section>



<?php require "pie.php";