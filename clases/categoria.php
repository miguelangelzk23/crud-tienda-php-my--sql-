<?php

class categoria
{

    public function registrar($conexion,$Nombre,$Descripcion,$Codigo)
    {
         $query = "call registro_categoria('$Nombre','$Descripcion','$Codigo')";
        $consulta = mysqli_query($conexion,$query);
        if ($consulta)
        {
            $respuesta = "Categoria Registrada";
        }
        else
        {
            $respuesta = "Problemas al registrar";
        }
        return $respuesta;
    }
    public function consultar($conexion)
    {
        $query ="SELECT * FROM ConsultaCategorias";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultarId($conexion, $IdCategoria)
    
       {
         $query ="call consultar_categoria ('$IdCategoria')";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
        
       }
    public function editar($conexion, $IdCategoria, $Nombre, $Descripcion, $Codigo)
    {
        $query = " call Editar_Categoria('$IdCategoria', '$Nombre', '$Descripcion', '$Codigo')";
    
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
    public function eliminar($conexion, $IdCategoria)
    {
        $query = "call eliminarCategoria ('$IdCategoria')";
        $consulta = mysqli_query($conexion, $query);
        if($consulta)
        {
            $respuesta = "categoria  eliminada";

        }
        else
        {
            $respuesta = "problems al eliminar";
        }
        return $respuesta;
    }
}