<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Clase 5 - WHILE - DO WHILE - FOR-->

<h4>1. Mostrar los números del 1 al 100.</h4>
    <?php
        $a = 1;
        while ($a <= 100) {
            print "$a, ";
            $a++;
        }

    <br>
    
<h4>2. Mostrar los números del 100 al 1.</h4>
    <?php
        $a = 100;
        while ($a >= 1) {
            print "$a, ";
            $a--;
        }

    ?><br>

<h4>3. Mostrar los números pares del 1 al 100.</h4>
    <?php
        $a=0;
         do {
            if (($a%2)==0) {
                print "$a, ";
            }
                $a++;    
         } while ($a <= 100);   

    ?><br>

<h4>4. Mostrar los números impares del 1 al 100.</h4>
    <?php
        $a=0;
         do {
            if (($a%3)==0) {
                print "$a, ";
            }
                $a++;    
         } while ($a <= 100);   

    ?><br>

<h4>5. Mostrar la suma de los números de 1 a 20.</h4>
    <?php
        $n=1;
        for($a=0; $a<=20; $a++){
            $n += $a;//es n el resultadod ela de la a actual con la n anterior
            print "<p>$n += $a</p>";
        } print "La suma de 1 a 20 es igual a  $n";
    ?>

<h4>6. Mostrar la suma de números pares de 1 a 20.</h4>
    <?php
        $n=0;
        for($a=0; $a<=20; $a++){
            if (($a%2)==0) {
                $n += $a;
                print "<p>$n + $a=$a</p>";
            }
        }print "La suma de los numeros pares de 1 a 20 es igual a  $n";
    ?>

    <?php
            $n=0;
            for($a=0; $a<=20; $a=$a+2){
                $n= $n + $a;
                $n=$n;
                print "<p>$n= $n + $a</p>";    
            }print "La suma de los numeros pares de 1 a 20 es igual a  $n";
        ?>
</body>
</html>