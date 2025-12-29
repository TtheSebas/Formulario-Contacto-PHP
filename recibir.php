<?php
$conexion = mysqli_connect("localhost", "root", "", "practica2");

if(!$conexion){
    die("Error de conexion: " . mysqli_connect_error());
}

if($_POST){
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
}

$spl = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

if(mysqli_query($conexion, $spl)){
    echo"<h1>!GUardado con exito!</h1>";
    echo"<p>Gracias $nombre, hemos guardado tu mensaje en la base de datos.</p>";
    echo"<a href='index.php'>Volver al formulario</a>";
}else{
    echo"Error: " . $spl . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>