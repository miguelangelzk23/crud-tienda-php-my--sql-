<?php

include '../clases/conexion.php';
include '../clases/categoria.php';

$objConexion = new conexion();
$objCategoria = new categoria();

$conexion = $objConexion->conectar();
echo $objCategoria->registrar($conexion,$_POST['Nombre'],$_POST['Descripcion'],$_POST['Codigo']);
echo "<a href='../menu.html'><button>Regresar</button></a>";
