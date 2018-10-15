<?php

class Producto{


    public function registrar($conexion,$Nombre,$Valor,$Cantidad,$IdCategoria){
        $query = "call registroProducto('$Nombre','$Valor','$Cantidad','$IdCategoria')";
        $consulta = mysqli_query($conexion,$query);
        
        if ($consulta){
            $respuesta = "producto Registrado";
        }
        else {
            $respuesta = "Problemas al registrar producto";
        }
        return $respuesta;
    }




    public function consultar($conexion){
          $query ="   select * from consultarProducto;";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultarId($conexion, $IdProducto)
    
       {
         $query =" call consultarIDproducto  ('$IdProducto')";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
        
       }
       public function editar($conexion, $IdProducto, $Nombre, $Valor, $Cantidad, $IdCategoria)
    {
        $query = "call Editar_producto('$IdProducto','$Nombre','$Valor','$Cantidad','$IdCategoria') ";
    
        $consulta = mysqli_query($conexion, $query);
        if($consulta)
        {
            $respuesta = "Categoria Actualizada correctamente";
        }
        else
        {
            $respuesta = "problemas al editar";
        }
        return $respuesta;
    }
    public function eliminar($conexion, $IdProducto)
    {
        $query = "call eliminarProducto ('$IdProducto')";
        $consulta = mysqli_query($conexion, $query);
        if($consulta)
        {
            $respuesta = "Producto  eliminado";

        }
        else
        {
            $respuesta = "problems al eliminar";
        }
        return $respuesta;
    }



}
