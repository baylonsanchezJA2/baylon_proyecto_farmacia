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

$sql="UPDATE cliente SET  Nombre='$Nombre',Domicilio='$Domicilio',Numero_tel='$Numero_tel',Correo='$Correo',Fecha_pedido='$Fecha_pedido',Medicamento='$Medicamento' WHERE IDcliente='$IDcliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>