<?php

include 'clases/conexion.php';
include 'clases/producto.php';

 $objConexion = new conexion();
 $objProducto = new producto();

 $conexion = $objConexion->conectar();
 $productos = $objProducto->consultar($conexion);
 
 ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
     <table>
        <tr>
            <th> Nombre </th>
            <th> Valor </th>
            <th> Cantidad </th>
            <th> Categoria </th>            
            <th> Editar</th>
            <th> eliminar</th>
        </tr>
    
     <?php
       while ($Producto = mysqli_fetch_array($productos)){
        ?>
        <tr>
            <td><?php echo $Producto['nombre_producto']?></td>
            <td><?php echo $Producto['valor_producto']?></td>
            <td><?php echo $Producto['Cantidad_de_productos']?></td>
            <td><?php echo $Producto['nombre_categoria']?></td>
            <td><a href="editar_producto.php?id= <?php echo $Producto['IdProducto']?>">Editar</a></td>
            <td><a href="controlador/eliminar_producto.php?id=<?php echo $Producto['IdProducto']?>">Eliminar</a></td>

            
        

        </tr>
        <?php
         }
        ?>
      
    </table>
    <center><a href="index.html"><button>Volver</button></a></center>
 </body>
 </html>