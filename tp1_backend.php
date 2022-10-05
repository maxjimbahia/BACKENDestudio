<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "Hola Mundo";
?><br>
<br>
<?php
$sadulo = "Hola Mundo";
echo $sadulo;
?><br> 

<h2>suma</h2>
<?php
$caramelos = 10;
$chupetines = 25;

echo $caramelos + $chupetines;
?><br>

<h2>resta</h2>
<?php
$caramelos = 10;
$chupetines = 25;

echo $caramelos - $chupetines;
?><br>

<h2>Multiplicacion</h2>
<?php
$caramelos = 10;
$chupetines = 25;

echo $caramelos * $chupetines;
?><br>

<h2>division</h2>
<?php
$caramelos = 10;
$chupetines = 25;

echo $caramelos / $chupetines;
?><br>

<h2>resto</h2>
<?php
$caramelos = 10;
$chupetines = 25;

echo $caramelos % $chupetines;
?><br>

<h2>Paso 20°C a °F</h2>
<?php
$gradosCelsius = 20;
$gradosfarenheit = 32;

echo ($gradosCelsius*1.8)+$gradosfarenheit;
?><br>

<h2>Calcular el perímetro de un rectángulo</h2>
<?php
$base = 18;
$altura = 12;
$lados = 2;

echo ($base * $lados)+($altura * $lados);
?><br>

<h2>Calcular el área de un rectángulo</h2>
<?php
$base = 18;
$altura = 12;

echo $base * $altura;
?><br>

<h2>Calcular el perímetro de un círculo</h2>
<?php
$radio = 30;
$numeropi = 3.141592;

echo $radio * $numeropi;
?><br>

<h2>Calcular el área de un círculo</h2>
<?php
$radio = 30;
$numeropi = 3.141592;

echo $radio * $numeropi * 2;
?><br>

</body>

</html>