<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>Ejercicio 7</h1>
    <strong>Ejercicio 7: </strong> Se requiere obtener la distancia entre dos puntos en el plano cartesiano <br><br>

    <?php

    //Declaro X1, X2, Y1, Y2

    $X1 = 20;
    $X2 = 30;
    $Y1 = 30;
    $Y2 = 15;

    //Hago cálculo para sacar la distancia

    $distancia = sqrt(($X2-$X1)**2+($Y2-$Y1)**2);

    ?>

    La distancia entre los dos puntos es de: <strong><?php echo round($distancia, 2) ?> </strong>







</body>
</html>