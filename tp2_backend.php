<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Trabajo practico Nro II</h1>

<!--  


-->

<h3>1- Crear una variable n y validar que sea un número positivo.</h3>
<?php
$nro = 5;

if ($nro > 0) {
    echo "El nomero $nro es positivo.";
}
?><br>

<h3>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h3>
<?php

if ($nro > 1 & $nro < 10) {
    echo "El numero $nro esta entre 1 y 10.";
} else {
    echo "El numero $nro no esta entre 1 y 10.";
}
?><br>

<h3>3- Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</h3>
<?php
if ($nro < 2 & $nro > 10) {
    echo "El numero $nro no esta entre 2 y 10.";
} else {
    echo "El numero $nro esta entre 2 y 10.";
}
?>

<h3>4- Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h3>
<?php
$numero1 = 4;
$numero2 = 7;
echo "Numero1 es $numero1 y Numero2 es $numero2. <br><br>";

if ($numero1 > $numero2) {
    echo "Si numero1 es mayor a Numero2. <br>";
    echo "Suma:"; echo $numero1+$numero2;
    echo "<br> Resta:"; echo $numero1-$numero2;
}elseif ($numero1 < $numero2) {
    echo "Si Numero2 es mayor a Numero1. <br>";
    echo "Multiplicacion:"; echo $numero1*$numero2 ;
    echo "<br> División:"; echo $numero1/$numero2;
    echo " y su resto:"; echo $numero1%$numero2;
}
if ($numero1 == $numero2) {
    echo "Los números ingresados son iguales";
}
?>
</body>
</html>