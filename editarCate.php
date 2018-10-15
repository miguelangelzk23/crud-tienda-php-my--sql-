<?php
include "clases/conexion.php";
include "clases/categoria.php";

$objConexion = new conexion();
$objCategoria = new categoria();
$conexion = $objConexion->conectar();
$datosCategoria = $objCategoria->consultarId($conexion,$_GET['id']);

$Nombre;
$Descripcion;
$Codigo;
$IdCategoria;


while($producto = mysqli_fetch_array($datosCategoria)){
    $IdCategoria = $producto['IdCategoria'];
    $Nombre = $producto['Nombre'];
    $Descripcion = $producto['Descripcion'];
    $Codigo= $producto['Codigo'];
    
    
    $IdCategoria = $producto['IdCategoria'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
    <form   action="controlador/editar_categoria.php" method="POST" >
        <input type="hidden" name="IdCategoria" value="<?php echo $IdCategoria;?>">

        <label for="">Nombre</label><input  type="text" name="Nombre" IdCategoria="Nombre" value="<?php  echo $Nombre  ?>"> <p>
        <label for="">Descripcion</label><input type="text" name="Descripcion" IdCategoria="Descripcion" value="<?php echo $Descripcion?>">  <p>
        <label for="">Codigo</label><input type="text" name="Codigo" IdCategoria="Codigo" value="<?php echo $Codigo ?>"> <p>
        
        <input type="submit" value= "Editar"> 
       
       
        <a href="index.html"> <button> menu</button></a>
</form>
</body>
</html>