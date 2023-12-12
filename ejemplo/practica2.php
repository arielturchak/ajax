<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica2</title>
</head>
<body>
    <?php
        //EJERCICIO 1
        //A
        $var1 = "Hola";
        $var2 = "Mundo";
        $var3 = $var1." ".$var2;
        echo "<br>";
        echo $var3;
        //B
        $Dni=true;
        is_bool($Dni);
        echo "<br>";
        echo $Dni;
        //C
        $var_float = 3.14;
        echo "<br>";
        echo $var_float;
        //D
        $array1 = array ("clave1" => "1", "clave2" => "2", "clave3" => "3");
        echo "<br>";
        print_r($array1);

        //EJERCICIO 2
        $Dni=false;
        is_bool($Dni);
        echo "<br>";
        echo $Dni;//no aparece nada ya que el valor de false es 0, por lo tanto no iprime nada en pantalla.

        //EJERCICIO 3
       $var3= str_replace(" ", "", $var3);// " " lo que quiero reemplazar y "" por lo que quiero reemplazar
       echo "<br>";
       echo $var3;

       //EJERCICIO 4
       $vartexto = "El operador \"+\" sirve para sumar el valor de variables. Con la \"/\"podemos
       dividir valores entre variables. El símbolo del dólar \"$\" indica que estamos
       utilizando variables pero no lo usaremos en las constantes o globales.";// colocamos la barra entre las comillas y el objeto
        echo "<br>";
        echo $vartexto;

        //EJERCICIO 5
        echo "<br>";
        echo strlen($vartexto);
        
        //EJERCICIO 6
        $var4 = "Hello World";
        $array_vocales = array("e", "o");
        $var5 = str_replace($array_vocales, "", $var4);
        echo "<br>";
        echo $var5;
        
        //EJERCICIO 7
        echo "<br>";
        $var_edad;
        echo empty($var_edad);// con este operador logico al salir un 1 nos quiere decir que es true, por lo tanto nos afirma que esta vacío
        // la variable varedad esta declarada sin asignarle ningun valor.
        
        //EJERCICIO 8
        echo "<br>";
        echo intval($var4);//con este método podemos convertir cualquier tipo de variable que pasemos por parametro en un entero, y sale 0 porque la cadena de texto no puede ser interpretada como un numero valido.

        //EJERCICIO 9
        //a
        echo "<br>";
        $numero = 144;
        $var_raiz = sqrt($numero);
        echo $var_raiz;

        //b
        echo "<br>";
        $numero = 2;
        $potencia = 8;
        $numero_elevado= pow($numero, $potencia);
        echo $numero_elevado;

        //c
        echo "<br>";
        $var_divisor = 100;
        $var_dividendo = 6;
       echo $resto = $var_divisor % $var_dividendo;

        //d
        echo "<br>";
        $numero1 = 3;
        $numero2 = 6;
        $div_comun = º
        echo $div_comun;

      ?>
</body>
</html>