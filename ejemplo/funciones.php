<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo date("d-M-Y H:i:s");
    echo"<br>";

    echo getcwd();
    echo"<br>";

    echo rand();
    echo"<br>";

    echo rand(0,10);
    echo"<br>";

    $array = array ('hola' =>1, 'adios'=>0 );
    print_r($array);
    echo"<br>";

    $archivo1 = fopen('adios.txt', 'w');//w es el modo permisos 
    fwrite($archivo1, "hola");
    fclose($archivo1);
    ?>
</body>
</html>