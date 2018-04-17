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
        
        /*$frutas= array();
        
        $frutas[0]= "manzana";
        $frutas[1]= "pera";
        $frutas[2]= "banana";
        
        //$frutas= array("manzana","pera","banana");//tambien se pueden declarar asi
        
        $frutas= ["manzana","pera","banana",25,true];//la forma rapida, array indexado, es decir sus posiciones son numeros
        
        $personas=["johan","alexis","nieto","pepito"];
        
        echo $frutas[0];//manzana
        
         $edad= ["johan"=>26,"alexis"=>21,"nieto"=>30];//array asociativo, mas facil de crear que en js asignamos la posicion con el valor usando =>
        
        $edad["pepito"]= 27;//tambien se pueden agregar mas posiciones asociativas como en js
        
        echo "<br>".$edad["johan"];//26
        echo "<br>".$edad["pepito"];//27
        
        
        echo "<br>mi nombre es $personas[0] y tengo {$edad['johan']} años de edad y me gusta la $frutas[0]";//las llaves en el array edad son por que sus comillas, dañan las " 
        
        
        
        
        
        //para multidimensionales revisar las practicas de js*/
        
        
        
        //FUNCIONES
        
        $colores= ["zalmon","verde","azul","rojo","amarillo"];
        
        $a= ["f","c","g","a","e","b","d",25,87,"G","F"];
        
        $frutas=["d"=>"pera","b"=>"mango","e"=>"banana","a"=>"coco","f"=>"aceituna"];
        
        /*echo count($frutas);//cuenta las posiciones, sea indexado o asociativo
        
        if(in_array("azul",$colores,false)){//in_array busca un valor en un array si lo encuentra devuelve true, si el tercer parametro es true, sera estricto, es decir si buscaramos "25", el buscaria un string, si el array tiene es un 25, no lo contara deben ser === 
            echo "se ha encontrado el valor azul";
            
        }else{
            echo "no se ha encontrado";
        }*/
        
        /*echo str_repeat("--",10)."<br>";
        echo "antes"."<br>";
        echo str_repeat("--",10)."<br>";
        
        foreach($colores as $clave=>$valor){
            echo "$clave = $valor <br>";
        }
        
        array_unshift($colores,"gris",30,"negro");//agrega uno o mas nuevos valores al inicio de un array,sin eliminar al que estaba antes
        
        array_shift($colores);//elimina el primer elemento de una array, aqui el "gris"
        
        array_push($colores,"chocolate","rosa");// agrega uno o mas valores al final de l array
        
        array_pop($colores);//elimina el ultimo parametro de un array, aqui "rosa"
        
        echo str_repeat("--",10)."<br>";
        echo "despues"."<br>";
        echo str_repeat("--",10)."<br>";
        
        foreach($colores as $clave=>$valor){
            echo "$clave = $valor <br>";
        }*/
        /*if(array_key_exists(a,$frutas)){//es como el in_array, pero este busca es la clave no su valor, sea una clave indexada o asociativa
            echo "se ha encontrado la clave";
            
        }else{
            echo "no se ha encontrado";
        }*/
        
        //echo array_search('mango',$frutas,true);//este metodo retorna la clave que encuentra asociada al valor que le indiquemos, tambien tiene el modo estricto ===, por defecto es false para que no lo sea
        
        /*$subArray= array_slice($a,2,2,true);//crea un nuevo array de otro, en el segundo parametro indica desde que posicion extraera, el tercero hasta que posicion en adelante tomara, el ultimo parametro que por defecto es false, indica si debe respetar la clave que originalmente tenian los valores en el array a romper, si es false, tendran sus claves desde la posicion 0 en el nuevo array
        
        
        echo "<br>";
        foreach($subArray as $clave=>$valor){
            echo "$clave = $valor <br>";
        }
        
        echo $subArray[2];//g, por lo que quiere decir que "subArray solo tiene las claves/indice 2 y 3, no hay ni la 0 ni 1*/
        
        
        
        
       /* foreach($colores as $clave=>$valor){
            echo "$clave = $valor <br>";
        }
        echo str_repeat("--",10)."<br>";
        //array_splice($colores,1);//elimina valores en un array, si indicamos un solo parametro, solo dejara un elemento
        
        //array_splice($colores,2,1);//pero si indicamos un segundo(desde que posicion/indice) y tercer parametro(cuantos eliminara), aqui quitaria azul que tenia el indice 2 
        
        //array_splice($colores,2,-2);//si el tercer parametro es negativo, el empezara desde la derecha, es decir del final del array, yo creia que empezaria desde el segundo parametro pero no es asi, aqui seria que se salva los 2 primeros valores y los 2 ultimos, todo lo demas desapareceria, se pued ejugar con los valores
        
        array_splice($colores,-3,-2,"gris");//el cuarto parametro indica que valor o array se colocara de reemplazo, aqui se colocaria en el-3 es decir azul, y el -2 seria rojo, lo que haria que gris reemplaza a azul
        
        
        foreach($colores as $clave=>$valor){
            echo "$clave = $valor <br>";
        }*/
        
        
        
        
        
        
       /* $test=["a"=>"verde","rojo","b"=>"verde","azul","rojo"];
        foreach($test as $clave=>$valor){
            echo "$clave = $valor <br>";
        }
        
        echo str_repeat("--",10)."<br>";
        
        $arraySinValoresRepetidos= array_unique($test);//este metodo no permite que alla mas de una clave con el mismo valor de un elemento anterior, por ejemplo, eliminara a "b" por que ya "a" tiene el valor "verde"
        
        foreach($arraySinValoresRepetidos as $clave=>$valor){
            echo "$clave = $valor <br>";
        }*/
        
        sort($a);//ordena un array en orden alfabetico deacuerdo a los valores, primero valores en letras y luego numericos, es decir los ordena y cambia sus indices
        
        //posee un segundo parametro, por defecto SORT_REGULAR, el SORT_NUMERIC solo ordena los datos de tipo numero, el SORT_STRING solo ordena los alfabetico pero colocando de primero a los numericos sin ordenarlos, el SORT_NATURAL ordena todos los valores como si fueran letras colocando a los numeros de primero, el (SORT_NATURAL | SORT_FLAG_CASE)  y el (SORT_STRING | SORT_FLAG_CASE) lo que hacen es que las minusculas vayan antes que las mayusculas
        
        //rsort($a);//es lo mismo que sort pero al revez
        
        //natsort($a);// es como un sort($a,SORT_NATURAL), pero respeta los indices que originalmente tenian los valores
        
        
        
        
        /*foreach($a as $clave=>$valor){
            echo "$clave = $valor <br>";
        }
        echo str_repeat("--",10)."<br>";
        
        asort($frutas);//es como un sort, pero el sort elimina las claves asociativas reemplazandola con indicees numericos, este asort los respeta
        
        //arsort lo mismo que asort pero al revez
        
        foreach($frutas as $clave=>$valor){
            echo "$clave = $valor <br>";
        }*/
        
        
        
        
        $id='3565';
        $nombre= "johan";
        $apellido= "nieto";
        $edad=25;
        $sexo="masculino";
        
        $array1=["apellido","edad","sexo"];
        
        
        $persona1= compact("id","nombre",$array1);//crea un array a partir de variables previamente creadas, en los parametros le enviamos el nombre de las variables, el usara sus nombre como claves asociativas para el array, y sus valores como bueno valores de cada posicion del array, tambien recibe como parametro un array, que tenga como valores los nombres de las variables a buscar
        
        echo $persona1['id']."<br>";
        foreach($persona1 as $clave=>$valor){
            echo "$clave = $valor <br>";
        }
        
        echo str_repeat("--",10)."<br>";
        
         $fruta="pera";
        
        $array2=["color"=> "verde",
                "forma"=>"rectangular",
                "fruta"=>"manzana"   
        ];
        
       extract($array2);//es lo contrario a compact, extract, convierte los elementos asociativos de un array en variables
        
       // extract($array2, EXTR_OVERWRITE); este es el segundo parametro por defecto, es decir sobreescribira variables ya existentes por las que tengan el mismo nombre de las que el extrae del array
        
        // extract($array2, EXTR_SKIP); aqui no reemplazara a la primera $fruta="pera", pasara de la que encontro en el array
        
        // extract($array2, EXTR_PREFIX_SAME, 'pf');en este caso, si encuentra una clave asociativa con el mismo nombre que una variable preexistente entonces le colocara un prefijo que indicamos en un tercer parametro
        //echo $pf_fruta;
        
        // extract($array2, EXTR_PREFIX_ALL, 'pf');//aqui le pondria prefijos a todo lo que encuentre en el array
        //echo $pf_color;
        //echo $pf_forma;
        
        //extract($array2, EXTR_PREFIX_INVALID, 'pf');//este lo que hara es que si por ejemplo algunos valores del arrray no tuviera claves asociativas, y fueran indexadas es decir numero, el les colocara el prefijo, esto es por que recordar que ninguna variable pueda ser nombrada comenzando con numeros
        //echo $pz_0;
        
        //extract($array2, EXTR_IF_EXIST);//esta extraera del array, solo si ya existen variables declaradas con el mismo nombre de las claves que encuentre en el array
        
        //extract($array2, EXTR_PREFIX_IF_EXIST, 'pf');//es como el anterior, pero ademas agregara prefijos a las claves que encuentre para los nombres de las variables
        
        //extract($array2, EXTR_REFS);// este es especial, lo que hara es que digamos esta $array2['fruta']='manzana', cuando se saque como variable $fruta='manzana', y si despues cambiams el valor a por ejemplo $fruta='pera' tambien hara que $array2['fruta'] valga ='pera'
        //este metodo se puede usar junto con EXTR_PREFIX_SAME  quedando (EXTR_PREFIX_SAME | EXTR_REFS, 'pf') lo que haria que si cambiaramos el valor de la variable $pf_fruta, tambien cambiemos el valor de $array2['fruta'] recordar que php tiene eso de variables por referencia
        
        echo $color."<br>";
        echo $forma."<br>";
        echo "$fruta <br>";//como array2 tenia un indice llamado fruta, y usamos el extract, esta reemplazo el valor de la primera variable $fruta= "pera" por $fruta="manzana"
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        ?>
    </section>
    
</body>
</html>