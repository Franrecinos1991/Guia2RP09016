<?php
include('conn.php');
$query =("INSERT INTO alumnos(nie, nombre, correo, telefono, direccion) VALUES ('$_REQUEST[nie]','$_REQUEST[nombre]','$_REQUEST[correo]','$_REQUEST[tel]','$_REQUEST[direccion]')" );

$consulta= pg_query($conexion,$query);

if($consulta){
    echo"
    <script>
    alert('Datos del Alumno ingresados correctamente');
    window.location.href='index.html';
    </script>
    ";



}else{

    echo"
    <script>
    alert('Todos los campos son obligatorios');
    window.location.href='index.html';
    </script>
    ";
}
pg_close();
?>