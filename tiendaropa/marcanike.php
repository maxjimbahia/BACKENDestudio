<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

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
        <a class="nav-link active" aria-current="page" href="listar.php">Tienda Ropa</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Busqueda</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="listarencards.php">Busos</a></li>
          <li><a class="dropdown-item" href="#">Nike</a></li>
          <li><a class="dropdown-item" href="#">Mayor a $500</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Lista completa</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </header>
    <main>
  <h1>Tienda de ropa</h1>
  <button type="submit"><a href="index.html">Inicio</a></button>
  <button type="submit"><a href="listar.php">Listar ropa</a></button>
  <button type="submit"><a href="agregar.html">Agregar ropa</a></button>
  <h2>Lista de ropa</h2>
  <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>

  <section>
    <div class="container">
      <div class="row">

        <?php
        // 1) Conexion
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "tienda_potrero");

        // 2) Preparar la orden SQL
        // Sintaxis SQL SELECT
        // SELECT * FROM nombre_tabla
        // => Selecciona todos los campos de la siguiente tabla
        // SELECT campos_tabla FROM nombre_tabla
        // => Selecciona los siguientes campos de la siguiente tabla
        $sql = "SELECT * FROM `tiendaderopa`";

        // 3) Ejecutar la orden y obtenemos los registros
        $datos= mysqli_query($marca, $nike);

        // 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
        while ($sql = mysqli_fetch_array($datos)) {?>
          <div class="card col-sm-12 col-md-6 col-lg-3">
            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="100px")>
            <a href="ver.php?id=<?php echo $reg['id'];?>" class="card-body">
              <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['marca']) ?></h3>
              <span>$ <?php echo $reg['precio']; ?></span>
            </a>
          </div>
        <?php } ?>

      </div>
    </div>
  </section>
  <!-- JavaScript del bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
