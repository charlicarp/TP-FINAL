<?php
include("conexionbd.php");
if($conectar){
    echo"conexion establecida";
}
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$texto=$_POST["texto"];
$insertar="INSERT INTO datos (nombre, apellido, texto) VALUES ('$nombre', '$apellido', '$texto')";
$resultado=mysqli_query($conectar, $insertar);
header("location:index.html");
?>