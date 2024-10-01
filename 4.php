<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <strong>Ejercicio 4:</strong> Una empresa constructora vende terrenos con la de la figura. Se quiere obtener el área respectiva de un terreno de medidas de cualquier valor. <br><br>

    <?php

        $ladoA = 40;
        $ladoB = 25;
        $ladoC = 20;

        //Para poder calcular el área del triangulo
        $calculoA = $ladoA - $ladoC;

        //Calculo area 1 del triángulo

        $area1 = ($ladoB * $calculoA) / 2;

        //Calculo area 2

        $area2 = $ladoB * $ladoC;

        $areaTotal = $area1 + $area2;
    ?>

    <strong>En el diagrama me equivoqué y no sumé el área total, me he dado cuenta a la hora de hacer el código</strong> <br><br>


    El resultado del área total es: <strong><?php echo $areaTotal ?> metros cuadrados</strong>





</body>
</html>