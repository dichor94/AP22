<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>

    <h1>Ejercicio 5</h1>
    <strong>Ejercicio 5: </strong> Se requiere obtener el área de la figura. Para resolver este problema se puede partir de que está formada por otras figuras de las cuales nos resulta más fácil calcular su área. <br><br>

    <?php

        //Insertos H y R con unos valores

        $ladoH = 30;
        $ladoR = 20;

        //Calculamos la altura del triángulo, uso el ** para indicar que es elevado a 2, he probado con ^ y no me ha funcionado... he buscaso por el manual de php y el uso correcto es "**"

        $alturaTriangulo = sqrt($ladoH ** 2 - $ladoR ** 2);

        //Calculamos el area1

        $area1 = (($ladoR * $alturaTriangulo)/2)*2;

        //Calculamos el area2

        //Pongo aquí el número Pi, pero lo ideal es ponerlo como constante
        $area2 = (3.14 * $ladoR ** 2)/2;

        //Sumo las areas obtenidas

        $sumaAreas = $area1 + $area2;
    ?>

<!--Empleo la función ROUND para que muestre solamente dos decimales-->
    El resultado final del área es: <strong><?php echo (round($sumaAreas,2))   ?></strong>

    
</body>
</html>