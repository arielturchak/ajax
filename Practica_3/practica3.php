<?php 

//ejercicio 1
    if(isset($_POST["precio"])) {
        $precio = $_POST["precio"];
        if($precio < 50) {
            echo "Los gastos de envio son 3,95";
        } else if ($precio >= 50 && $precio < 75) {
            echo "Los gastos de envio son 2,95";
        } else if ($precio >= 75 && $precio < 100) {
            echo "Los gastos de envio son 1,95";
        } else if ($precio >= 100) {
            echo "Los gastos de envio son gratuitos";
        }
    }

 
//ejercicio 2
    if(isset($_POST["precio1"])) {
        $precio = $_POST["precio1"];
        switch ($precio) {
            case  $precio < 50;  {
                echo "Los gastos de envio son 3,95";
                break;
            }
            case $precio >= 50 && $precio < 75: {
                echo "Los gastos de envio son 2,95";
                break;
            }
            case $precio >=75 && $precio < 100: {
                echo "Los gastos de envio son 1,95";
                break;
            }
            default: {
                echo "Los gastos de envio son gratuitos";
                break;
            }
        }
    }

  
    //ejercicio 3

    if(isset($_POST["numero1"])) {
        $numeros = array(
            $_POST["numero1"],
            $_POST["numero2"],
            $_POST["numero3"],
            $_POST["numero4"],
            $_POST["numero5"]
        );
            $mayor = $numeros[0];//almaceno en una variable el numero mayor
            for ($i = 1; $i < 5; $i++) {//recorro el array de los 5 numeros 
                if ($numeros[$i] > $mayor) {//comparo el numero que esta iterando con el numero en mi variable almacenada
                    $mayor = $numeros[$i];//si el numero comparado es mayor al almacenado en $mayor se actualiza el valor almacenado
                }
            }
            echo "El número mayor es: $mayor";
    }


    //ejercicio 4
    if(isset($_POST["boton"])) {
    $matriznumerica = array(
        array(3, 1),
        array(2, 0)
    );
    foreach ($matriznumerica as $fila) {
        foreach ($fila as $elemento) {
            echo $elemento . ' ';
        }
        echo '<br>'; // Agrego un salto de línea para separar las filas
    }
    }
    //ejercicio 5
    if(isset($_POST["boton1"])) {
        $matriznumerica = array(
            array(1, 0),
            array(0, 1)
        );
        $matriznumerica1 = array(
            array(0, 1),
            array(1, 0)
        );
      
            for($i=0; $i<2; $i++){
                for($j=0; $j<2; $j++){
                    $matrizTotal[$i][$j] = $matriznumerica[$i][$j] + $matriznumerica1[$i][$j];
                    echo $matrizTotal[$i][$j];
                }
                echo "<br>";
            }
            
        }
?>