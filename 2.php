<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Ejercicio 2</h1>
    <br>
    <strong>Ejercicio2: </strong>Se requiere conocer el área de un rectángulo. Como se sabe, para poder obtener el área del rectángulo, primeramente se tiene que conocer la base y la altura, y una vez obtenidas se presenta el resultado.
    <br><br>

    <?php

        $base = 25;
        $altura = 40;

        $multiplicacion = $base * $altura;

        $area = $multiplicacion /2;

    ?>

    La base del rectángulo es de: <strong><?php echo $base?></strong>cm<br><br>
    La altura del rectángulo es de: <strong><?php echo $altura?></strong>cm<br><br>

    El área del rectángulo es: <strong><?php echo $area   ?></strong>cm
    
</body>
</html>