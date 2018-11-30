<?php
include 'conexion.php';
$consulta = "SELECT * FROM libros";
$resultado = $con->query($consulta);
//if($consulta->error) die($consulta->error);
//Ejemplo para imprimir los datos. El bucle recorre todos los registros.
while($fila = $resultado->fetch_assoc()) {
    echo "Titulo: " . $fila['titulo'];
    echo "Codigo: " . $fila['codigo'];
    echo "precio: " . $fila['precio'];

}
?>