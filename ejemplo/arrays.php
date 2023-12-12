<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo</title>
</head>
<body>
    <?php
      $varTexto="hola"; // Cadena de texto
      $varEntero=1234; // Entero
      $varBoolean=true; // Boolean
      $varFloat=1.2; // Float
      $varArray= array ("1", "2"); //Array
      /* Para introducir un salto de carro y ser mostrado por pantalla utilizamos
      <b/r> */
      echo "Variable de tipo cadena de texto: ". $varTexto . "<br/>";
      echo "Variable de tipo entero: ". $varEntero . "<br/>";
      echo "Variable de tipo boolean: ". $varBoolean . "<br/>";
      echo "Variable de tipo float: ". $varFloat . "<br/>";
      echo "Variable de tipo compuesto: " ;
      print_r($varArray); #La función print_r es la utilizada para
      //imprimir el contenido de un array


        $habitaciones=array("cocina", "lavabo", "lavadero", "dormitorio");
        echo $habitaciones[0];

        echo "<br><br><br><br><br>";

        $matriznumerica=array(
            array(1,2,3,4),
            array(5,6,7,8),
            array(9,10,11,12),
            array(13,14,15,16)
        );
            echo $matriznumerica[0][0];
            echo $matriznumerica[2][2];

            $matrizclave=array(
                'col0' =>array (1,2,3,4),
                'col1' =>array (5,6,7,8),
                'col2' =>array (9,10,10,11),
                'col3' =>array (12,13,14,15)
            );
            echo "<br><br><br><br><br>";

            echo $matrizclave['col3'][1];



            echo "Ejercicio 6";

            echo "<br><br><br><br><br>";

            $matriznumerica = array(
                array(3, 1),
                array(2, 0),
            );

            
            foreach ($matriznumerica as $fila) {
                foreach ($fila as $elemento) {
                    echo $elemento . ' ';
                }
                echo '<br>'; // Agregar un salto de línea para separar las filas
            }




      ?>
</body>
</html>