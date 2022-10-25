<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "escuela");

// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];

// 3) Preparar la orden SQL
// => Selecciona todos los campos de la tabla alumno donde el campo dni sea igual a $dni
// a) generar la consulta a realizar
$consulta = "SELECT * FROM tiendaderopa WHERE id=$id";

// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$respuesta = mysqli_query($conexion, $consulta);

// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($respuesta);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda de Ropa</title>
    </head>
    <body>
        <main>
            <?php
            // 6) asignamos a diferentes variables los respectivos valores del array $datos.
            $tipoderopa=$datos["tipoderopa"];
            $marca=$datos["marca"];
            $talle=$datos["talle"];
            $precio=$datos["precio"];
            $imagen=$datos['imagen'];?>

            <h2>Modificar</h2>
            <p>Ingrese los nuevos datos de la prenda.</p>
            
            <form action="" method="post" enctype="multipart/form-data">
                <label>Tipo de prenda</label>
                <input type="text" name="tipoderopa" placeholder="Tipoderopa" value="<?php echo "$tipoderopa"; ?>"> /dentro del value ponemos el dato que que trajimos del egistro para que ya aparezca el el imput y no volver aq escribirlo
                <label>Marca</label>
                <input type="text" name="marca" placeholder="Marca" value="<?php echo "$marca"; ?>">
                <label>Talle</label>
                <input type="text" name="talle" placeholder="Talle" value="<?php echo "$talle"; ?>">
                <label>Precio</label>
                <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
                <label>Imagen</label>
                <input type="file" name="imagen" placeholder="imagen">
                <input type="submit" name="guardar_cambios" value="Guardar Cambios">
                <button type="submit" name="Cancelar" formaction="index.html">Cancelar</button>
            </form>
            <?php
            // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
            if(array_key_exists('guardar_cambios',$_POST)){

                // 2') Almacenamos los datos actualizados del envío POST
                // a) generar variables para cada dato a almacenar en la bbdd
                // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
                // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
                        $tipoderopa=$_POST['tipoderopa'];
                        $marca=$_POST['marca'];
                        $talle=$_POST['talle'];
                        $precio=$_POST['precio'];
                        $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

                // 3') Preparar la orden SQL
                // "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
                // a) generar la consulta a realizar
                $consulta = "UPDATE tiendaderopa SET tipoderopa='$tipoderopa', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen' WHERE id =$id";

                // 4') Ejecutar la orden y actualizamos los datos
                // a) ejecutar la consulta
                mysqli_query($conexion,$consulta);

                // a) rederigir a listar
                header('location: listar.php');
            }?>
            
        </main>
        
        <footer>

        </footer>
    
        <!-- JavaScript del bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    </body>
</html>