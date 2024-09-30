<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Ejercicio1</h1>
    <strong>Ejercicio 1: </strong>Un estudiante realiza cuatro exámenes durante el semestre, los cuales tienen la misma ponderación. Se quiere obtener el promedio de las calificaciones obtenidas.
    <br><br>
    <?php

        //Ejercicio promedio notas

        $nota1 = 6;
        $nota2 = 10;
        $nota3 = 9;
        $nota4 = 10;


        $mediaFinal = ($nota1 + $nota2 + $nota3 + $nota4)/4;

        

    ?>

    La nota final es: <strong><?php echo $mediaFinal ?></strong>

</body>
</html>