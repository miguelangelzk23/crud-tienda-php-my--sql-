<?php
 include '../clases/conexion.php';
 include '../clases/categoria.php';

 $objConexion = new conexion();
 $objCategoria = new categoria();

 $conexion = $objConexion->conectar();
  echo $objCategoria->editar($conexion, $_POST['IdCategoria'], $_POST['Nombre'], $_POST['Descripcion'],
 $_POST['Codigo']);
 echo "<p/>";
 
   echo "<a href='../consultarcategoria.php'>volver</a>";