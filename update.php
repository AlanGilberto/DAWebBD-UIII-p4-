<?php

include("conexion.php");
$con=conectar();


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];

// $sql="UPDATE clientes SET (nombre='$nombre',apellido='$apellido',telefono='$telefono',edad='$edad') WHERE id='$id'";
$sql = "UPDATE chofer SET nombre='$nombre', apellido='$apellido', telefono='$telefono', edad='$edad' WHERE id = '$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>