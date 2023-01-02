<?php
function conexion (){
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    
    $baseDatos = "";

    //conectar con el servidor
    $conectar=mysqli_connect($servidor, $usuario, $clave);
    //seleccionar la base de datos
    mysqli_select_db($conectar, $baseDatos);

    return $conectar;
}