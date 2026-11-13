<?php
require_once 'conexion.php';
$matricula = $_POST['matricula'];

// Consulta SQL básica
$sql = "SELECT nombre FROM alumnos WHERE matricula = '$matricula'";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado de Búsqueda</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 40px; display: flex; flex-direction: column; align-items: center; background-image: url('Pink Glow GIF by xponentialdesign.gif'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh; box-sizing: border-box;">

  <div style="background-color: #ffffff; padding: 24px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); width: 100%; max-width: 400px; box-sizing: border-box; text-align: center;">
    
    <h3 style="color: #28a745; margin-top: 0;">¡Conexión exitosa!</h3>
    
    <?php if ($resultado->num_rows > 0) {
        $alumno = $resultado->fetch_assoc();
        echo "<p style='color: #333; font-size: 15px;'>El alumno con matrícula <b>" . $matricula . "</b> es: <b style='color: #007bff;'>" . $alumno['nombre'] . "</b></p>";
    } else {
        echo "<h4 style='color: #dc3545;'>Sin resultados</h4>";
        echo "<p style='color: #555; font-size: 14px;'>No se encontró ningún alumno con la matrícula: <b>" . $matricula . "</b></p>";
    }
    
    $conexion->close();
    ?>
    
    <br>
    <a href="index.html" style="display: inline-block; margin-top: 15px; color: #007bff; text-decoration: none; font-size: 14px; font-weight: bold;">← Volver al formulario</a>
  
  </div>

</body>
</html>