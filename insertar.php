<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];


$sql="INSERT INTO chofer VALUES('$id','$nombre','$apellido','$telefono','$edad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>