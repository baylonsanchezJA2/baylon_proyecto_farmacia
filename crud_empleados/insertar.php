<?php
include("conexion.php");
$con=conectar();

$IDempleado=$_POST['IDempleado'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Numero_tel=$_POST['Numero_tel'];
$Fecha_nacimiento=$_POST['Fecha_nacimiento'];
$Correo=$_POST['Correo'];
$Domicilio=$_POST['Domicilio'];


$sql="INSERT INTO empleados VALUES('$IDempleado','$Nombre','$Apellido','$Numero_tel','$Fecha_nacimiento','$Correo','$Domicilio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>