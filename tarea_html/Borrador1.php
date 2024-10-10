<?php
	$usuario = $_POST["usuario"];
	$email = $_POST["email"];
    $contrasenia = $_POST["contrasenia"];
    $contrasenia2 = $_POST["contrasenia2"];
    $servername = "127.0.0.1";
    $database = "CarZoneOnline";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion


    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        //insertamos el resultado del formulario
        $query = "insert into usuario values('$email', '$usuario', '$contrasenia', '$contrasenia2');";
        $resultado=mysqli_query($conexion, $query);

    }
    // Verificar si las contraseñas coinciden
    if ($contrasenia === $contrasenia2) {
        echo "Las contraseñas coinciden.";
        // Aquí puedes proceder a guardar la contraseña, preferiblemente cifrada con password_hash()
        // Ejemplo: $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    } else {
        echo "Las contraseñas no coinciden.";
    }

    
    mysqli_close($conexion);
?>
