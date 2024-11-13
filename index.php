<?php

include('conexion.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checador de Asistencia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Checador de Asistencia</h1>

        <!-- Formulario de checador de empleados -->
        <div class="employee-check">
            <h2>Registro de Asistencia</h2>
            <form id="employee-form">
                <label for="employee-id">ID de Empleado:</label>
                <input type="text" id="employee-id" name="employee-id" required>
                
                <button type="button" id="check-in">Registrar Entrada</button>
                <button type="button" id="check-out">Registrar Salida</button>
            </form>
        </div>

        <!-- Enlace para el acceso del administrador -->
        <div class="admin-link">
            <a href="admin.php">Acceso del Administrador</a>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
