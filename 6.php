<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    
    <h1>Ejercicio 6</h1>
    <strong>Ejercicio 6: </strong>Un productor de leche lleva el registro de lo que produce en litros, pero cuando entrega le pagan en galones. Ayuda al productor a saber cuánto recibirá por la entrega de su producción de un día. Se proporciona los litros por día del productor y se determinará cuánto le pagará por ellos a razón de 2€ el galón. NOTA: 1 galón =3,785 litros. <br><br>

    <?php

    //Indicamos los litros

    $litros = 5;

    //Hacemos la operación para saber la cantidad del galón y así sacar después el precio, ya que lo muestra por litros

    $cantidadGalon = $litros / 3.785; //Se puede poner como variable por si luego se quiere cambiar, pero en este caso lo ponemos directamente.

    //Hacemos el precio final por los litros vendidos

    $precioFinal = $cantidadGalon * 2;

    ?>

    El precio final de la leche vendida en el día de hoy es: <strong><?php echo round($precioFinal, 2)?>€</strong>




</body>
</html>