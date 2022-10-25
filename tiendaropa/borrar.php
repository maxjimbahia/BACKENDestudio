<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgregarRopa</title>

    <!-- CSS bootstrap only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- vinculacin de hojas de estilos css -->
    <link rel="stylesheet" href="css/estilos.css">

    <!-- Vinculacion de la libreria de iconos Jam Icons v2 - Iconos Tipograficos -->
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
</head>

<body>
    <header>
        <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="listarencards.php">Tienda Ropa</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false">Busqueda</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="buzos.php">Busos</a></li>
            <li><a class="dropdown-item" href="nike.php">Nike</a></li>
            <li><a class="dropdown-item" href="mayora500.php">Mayor a $500</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="agregarropa.html">Agregar Ropa</a></li>
            </ul>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="listar.php">Todos los Registros</a>
        </li>
        </ul>
    </header>

    <main>
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
        // DELETE FROM nombre_tabla WHERE campo_tabla=dato
        // => Elimina de la siguiente tabla el registro donde este campo sea igual a este dato
        // DELETE FROM nombre_tabla
        // => Elimina todos los registros de la siguiente tabla
        // a) generar la consulta a realizar
        $consulta = "DELETE FROM `tiendaderopa` WHERE `id`=$id";

        // 4) Ejecutar la orden y eliminamos el regitro seleccionado
        // a) ejecutar la consulta
        mysqli_query($conexion,$consulta);

        // a) rederigir a listar
        header('location: listar.php');
        ?>
    </main>
    
    <footer>

    </footer>
    
    <!-- JavaScript del bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>