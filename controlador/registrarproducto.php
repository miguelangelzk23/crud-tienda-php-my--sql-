<?php

include '../clases/conexion.php';
include '../clases/producto.php';

$objConexion = new conexion();
$objProducto = new Producto();

$conexion = $objConexion->conectar();
echo $objProducto->registrar($conexion,$_POST['Nombre'],$_POST['Valor'],
$_POST['Cantidad'],$_POST['IdCategoria']);
echo "<a href='../menu.html'><button>Regresar</button></a>";