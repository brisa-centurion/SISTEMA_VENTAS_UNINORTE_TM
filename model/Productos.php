<?php
//La clase Producto hereda las funciones de la clasee Conectar
    class Producto extends Conectar
    {
        //Obtiene todos los Productos de la base de datos
        public function get_producto(){

            //Establece la conexion con la bse de datos
            $conectar = parent::conexion;

            //Codificacion de caracteres
            $sql = "SELECT =FROM tm_producto WHERE est = 1"

            //Consulta SQL para obtener todos los productos
            $sql = $conectar->prepare(sql);

            //Preparar la consulta
            $resultado =$sql->ferchAll();

            //Ejecuta la consulta
            $sql = execute();

            //Obtiene y retorna todos los registros encontrados
            $resultado = $sql->fetchAll();

            return $resultado;


        }
    }
?>