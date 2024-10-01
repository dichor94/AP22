<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>

    <h1>Ejercicio 8</h1>
    <strong>Ejercicio 8: </strong> Se requiere determinar el sueldo semanal de un trabajador con base en las horas que trabaja y el pago por hora que recibe.

    <?php

        //Declaro las horas semanales y el cobro por hora

        $horasSemanal = 37;
        $cobroHora = 9; //Lo pongo en una variable para ver que se puede poner así, si fuera siempre fijo se pondría como una constante.

        //Hago operación del cobro semanal

        $cobroSemanal = $horasSemanal * $cobroHora;
    ?>

    El sueldo semanal del usuario es de: <strong><?php echo round($cobroSemanal,2)   ?> €</strong>




</body>
</html>