<?php require "cabecera.php"?>
<section>
    
    <?php
    class Persona{//clases en php
        public $nombre;//usamos la palabra public para crear propiedades de una clase, no es como en js que era con los this.nombre
        public $edad;


        function __construct($nombre,$edad){//tambien a diferencia de js, la clases constructora se hace asi, y los this en php para referenciar que se usaran dentro de la misma clase tienen que tener $ y usar la nomenclatura de la flecha, no es la del punto como en js, por cierto la funcion constructora se ejecuta sola apenas se cree una instancia de esta clase

            $this->nombre= $nombre;
            $this->edad=$edad;
        }

        function saludar(){
            echo "<br> hola me llamo $this->nombre y tengo $this->edad años de edad <br>";
        }
        
    function __destruct(){//y este se ejecuta cuando la instancia es borrada de memoria, es decir despues de que se ejecuta la ultima intruccion que cada instancia de esta clase, o con un unset
        echo "<br> la instancia de la clase ha sido borrada de memoria<br>";
    }
      
}


$johan= new Persona('johan','26');
$alexis= new Persona('alexis',25);

echo $johan->nombre."<br>";
echo $johan->edad."<br>";

$johan->saludar();


unset($johan);//este unset esta eliminando la instancia, es para que el metodo destruct se ejecute dentro del section donde estamos, de lo contrario lo hara afuera del mismo, o al final del body, no me queda muy claro en la inspeccion de google
$alexis->saludar();//este si quedo afuera del section, por eso es recomendable si se quiere eliminar una instancia que tiene un metodo destruct, usar el unset
    
    ?>
    
    
</section>



<?php require "pie.php"?>