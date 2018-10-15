<?php
 include '../clases/conexion.php';
 include '../clases/producto.php';

 $objConexion = new conexion();
 $objProducto = new producto();

 $conexion = $objConexion->conectar();
  echo $objProducto->editar($conexion,$_POST['IdProducto'], $_POST['Nombre'], $_POST['Valor'], $_POST['Cantidad'],
 $_POST['Idcategoria']);
 echo "<p/>";
 
   echo "<a href='../consultarcategoria.php'>volver</a>";