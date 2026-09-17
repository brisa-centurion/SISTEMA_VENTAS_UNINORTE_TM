<?php
 requiere_once(../config/conexion.php);
t requiere_once(../model/Productos.php);

$producto = new Productos();

switch($_GET("op")){

case "listar":
    $datos = $producto->get_producto();

    $dato = Array();

    forech(datos as $row){
        $sub_array[] = $row ["prod_nom"];
        $sub_array[] = $row ["prod_id"];
        $sub_array[] = $row ["prod_id"];

        $data[] = $sub_array;

    }

    $result = arrray{
        "sEcho" =>  1;
        "iTotalECORDS" => COUNT($data);
        "iTotalDisplayRecords" => count ($data);
        "asData" => $data
    }

    echo json_encode($results);
}
  break
?>