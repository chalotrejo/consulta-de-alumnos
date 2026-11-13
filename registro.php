<?php
require_once 'conexion.php';

$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];

// Consulta SQL para insertar el nuevo alumno
$sql = "INSERT INTO alumnos (matricula, nombre) VALUES ('$matricula', '$nombre')";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado de Registro</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 40px; display: flex; flex-direction: column; align-items: center; background-image: url('Pink Glow GIF by xponentialdesign.gif'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh; box-sizing: border-box;">

  <div style="background-color: #ffffff; padding: 24px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); width: 100%; max-width: 400px; box-sizing: border-box; text-align: center;">
    
    <?php 
    if ($conexion->query($sql) === TRUE) {
        echo "<h3 style='color: #28a745; margin-top: 0;'>¡Registro exitoso!</h3>";
        echo "<p style='color: #333; font-size: 15px;'>El alumno <b>" . $nombre . "</b> fue guardado correctamente con la matrícula: <b style='color: #007bff;'>" . $matricula . "</b></p>";
    } else {
        echo "<h3 style='color: #dc3545; margin-top: 0;'>Error al registrar</h3>";
        echo "<p style='color: #555; font-size: 14px;'>No se pudo guardar el registro. Es probable que la matrícula ya exista.</p>";
    }
    
    $conexion->close();
    ?>
    
    <br>
    <a href="index.html" style="display: inline-block; margin-top: 15px; color: #007bff; text-decoration: none; font-size: 14px; font-weight: bold;">← Volver a Consulta</a>
  
  </div>

</body>
</html>