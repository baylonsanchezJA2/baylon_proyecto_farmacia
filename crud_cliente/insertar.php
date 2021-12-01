<?php
include("conexion.php");
$con=conectar();

$IDcliente=$_POST['IDcliente'];
$Nombre=$_POST['Nombre'];
$Domicilio=$_POST['Domicilio'];
$Numero_tel=$_POST['Numero_tel'];
$Correo=$_POST['Correo'];
$Fecha_pedido=$_POST['Fecha_pedido'];
$Medicamento=$_POST['Medicamento'];


$sql="INSERT INTO cliente VALUES('$IDcliente','$Nombre','$Domicilio','$Numero_tel','$Correo','$Fecha_pedido','$Medicamento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>