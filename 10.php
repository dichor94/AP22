<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    
    <h1>Ejercicio 10</h1>
    <strong>Ejercicio 10: </strong>La distribuidora de agua potable requiere determinar el pago que debe realizar una
    persona por el total de metros cúbicos que consume de agua al llenar un depósito <br><br>

    <?php

        //Declaro la altura, largo y ancho

        $altura = 20;
        $largo = 50;
        $ancho = 30;
        $precio = 5; //En el diagrama se me pasó por completo ponerlo en el apartado de declarar la variable.. 

        //Calculo el volumen

        $volumen = ($altura * $largo * $ancho);

        //Calculo el pago final sabiendo ya el volumen

        $pago = $volumen * $precio;

    ?>

    El pago total  <strong><?php echo $volumen  ?> litros</strong> es de: <strong><?php echo round($pago, 2) ?> €</strong>
</body>
</html>