<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ListadoRopa</title>

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
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Busqueda</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="buzos.php">Busos</a></li>
          <li><a class="dropdown-item" href="nike.php">Nike</a></li>
          <li><a class="dropdown-item" href="mayora500.php">Mayor a $500</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="agregarropa.html">Agregar Ropa</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listar.php">Todos los Registros</a>
      </li>
    </ul>
  </header>
    <main>

    <h1>Tienda de ropa</h1>

    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
    <table class="table table-striped">
      <tr>
        <th >ID</th>
        <th>TIPO DE ROPA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
        <th>EDITAR</th>
        <th>BORRAR</th>
      </tr>
    
      <?php
      // 1) Conexion
          $conexion=mysqli_connect("127.0.0.1","root","");
          mysqli_select_db($conexion, "escuela");

      // 2) Preparar la orden SQL
      // Sintaxis SQL SELECT
      // SELECT * FROM nombre_tabla
      // => Selecciona todos los campos de la siguiente tabla
      // SELECT campos_tabla FROM nombre_tabla
      // => Selecciona los siguientes campos de la siguiente tabla
        $consulta = "SELECT*FROM tiendaderopa";

      // 3) Ejecutar la orden y obtenemos los registros
        $datos=mysqli_query($conexion, $consulta);
        
      // 4) Mostrar los datos del registro
      
      while ($reg = mysqli_fetch_array($datos)) { ?>
        <tr class="table">
          <td><?php echo $reg['id']; ?></td>
          <td><?php echo $reg['tipoderopa']; ?></td>
          <td><?php echo $reg['marca']; ?></td>
          <td><?php echo $reg['talle']; ?></td>
          <td><?php echo $reg['precio']; ?></td>
          <td><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="100px">Imagen</td>
          <td><a href="editar.php?id=<?php echo $reg['id'];?>">Editar</a></td>
          <td><a href="borrar.php?id=<?php echo $reg['id'];?>">Borrar</a></td>
        </tr>
        
      <?php } ?>
    </table>      
  
  <!-- JavaScript del bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
