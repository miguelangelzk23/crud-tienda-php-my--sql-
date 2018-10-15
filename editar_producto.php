<?php
include "clases/conexion.php";
include "clases/producto.php";

$objConexion = new conexion();
$objProducto = new producto();
$conexion = $objConexion->conectar();
$datosProducto = $objProducto->consultarId($conexion,$_GET['id']);

$Nombre;
$Valor;
$Cantidad;
$IdCategoria;


while($producto = mysqli_fetch_array($datosProducto)){
    
    $IdProducto = $producto['IdProducto'];
    $Nombre = $producto['Nombre'];
    $Valor = $producto['valor'];
    $Cantidad= $producto['Cantidad'];
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
    <form   action="controlador/editar_producto.php" method="POST" >
        <input type="hidden" name="IdProducto" value="<?php echo $IdProducto;?>">

        <label for="">Nombre</label><input  type="text" name="Nombre" IdProducto="Nombre" value="<?php  echo $Nombre  ?>"> <p>
        <label for="">valor</label><input type="text" name="Descripcion" IdProducto="Valor" value="<?php echo $Valor?>">  <p>
        <label for="">Cantidad</label><input type="text" name="Codigo" IdProducto="Cantidad" value="<?php echo $Cantidad ?>"> <p>
        
        <input type="submit" value= "Editar"> 
       
       
        <a href="index.html"> <button> menu</button></a>
</form>
</body>
</html>