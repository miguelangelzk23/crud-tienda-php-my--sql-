<?php

include 'clases/conexion.php';
include 'clases/categoria.php';

 $objConexion = new conexion();
 $objCategoria = new categoria();

 $conexion = $objConexion->conectar();
 $categorias = $objCategoria->consultar($conexion);
 
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
            <th> Descripcion </th>
            <th> Codigo </th>
            <th> Editar</th>
            <th> eliminar</th>
        </tr>
    
     <?php
       while ($categoria = mysqli_fetch_array($categorias)){
        ?>
        <tr>
            <td><?php echo $categoria['Nombre']?></td>
            <td><?php echo $categoria['Descripcion']?></td>
            <td><?php echo $categoria['Codigo']?></td>
            <td><a href="editarCate.php?id= <?php echo $categoria['IdCategoria']?>">Editar</a></td>
            <td><a href="controlador/eliminar_categoria.php?id=<?php echo $categoria['IdCategoria']?>">Eliminar</a></td>

        </tr>
        <?php
         }
        ?>
      
    </table>
    <center><a href="index.html"><button>Volver</button></a></center>
 </body>
 </html>