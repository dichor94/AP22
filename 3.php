<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ejercicio 3</h1>
    <strong>Ejercicio 3: </strong>Se requiere obtener el área de una circunferencia. Si se analiza la fórmula que se utiliza para tal fin, se puede establecer que se requiere un valor de radio solamente y que existe un valor constante, que es el valor de PI, que se establece como 3.1416. <br><br>

    <?php

        $radio = 25;
        const PI = 3.14; //Pongo el valor de PI como constante


        $radioCuadrado = $radio * $radio;

        //Calculamos el área del círculo a partir del radioCuadrado

        $areaCirculo = PI * $radioCuadrado;

    ?>


    El valor del radio es: <strong><?php echo $radio ?></strong><br><br>
    El área del círculo es: <strong><?php echo $areaCirculo ?></strong>



</body>
</html>