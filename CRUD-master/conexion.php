
<?php
    //Conexión a la base de datos php2 con el usuario webuser y contraseña php2
    $conexion = mysqli_connect('127.0.0.1','userweb','php2','php2');
    if(mysqli_connect_error()){
        die('No se puede conectar a la base de datos'.mysqli_connect_error());
    }
?>

