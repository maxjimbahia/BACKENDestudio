<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h4>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h4>
        <?php
            $matriz = ["0", "2", "4", "6", "8", "10"];
            print "<pre>\n";
            print_r($matriz);
            print "<pre>\n";       
            foreach ($matriz as $valor){
                print "<p>los 10 primeros números pares es $valor</p>\n";
            }
        ?>
    <hr>
    <h4>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
        matriz. Mostrar el esquema del array con print_r().</h4>
    
        <?php
            $matriz = ["Pedro", "Ana", "34", "1"];
            print "<pre>\n";
            print_r($matriz);
            print "<pre>\n";       
            foreach ($matriz as $valor){
                print "<p>los valores son $valor</p>\n";
            }
        ?>
    <hr>
    <h4>3. Crear un array asociativo e introducir los siguientes valores:
        Nombre: Pedro
        Apellido: Torres
        Dirección: Av. Mayor 3703
        Teléfono: 1122334455</h4>
        
        <?php
            $Datos = ['Nombre:'=>"Pedro", 'Apellido:'=>"Torres", 'Direccion:'=>"Av. Mayo 3703", 'Telefono:'=>1122334455];
            print "<pre>\n";
            print_r($Datos);
            print "<pre>\n";       
            foreach ($Datos as $indice => $valor){
                print "<p>$indice $valor</p>\n";
            }
        ?>
    <hr>
    <h4>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
        Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
        Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h4>

        <?php
            $Datos = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
            print "<pre>\n";
            print_r($Datos);
            print "<pre>\n";       
            foreach ($Datos as $indice => $valor){
                print "<p>La ciudad con el índice $indice tiene el nombre $valor.</p>\n";
            }    
        ?>
    <hr>
    <h4>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
    LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
    Ejemplo: El índice de Madrid es MD.</h4>
        <?php
            $Datos = ['MD'=>"Madrid", 'BCL'=>"Barcelona", 'LD'=>"Londres", 'NY'=>"New York", 'LA'=>"Los Ángeles", 'CCG'=>"Chicago"];
            print "<pre>\n";
            print_r($Datos);
            print "<pre>\n";       
            foreach ($Datos as $indice => $valor){
                print "<p>La ciudad con el índice $indice tiene el nombre $valor.</p>\n";
            }
        ?>
</body>

</html>