<?php

include('conexion.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso del Administrador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Acceso del Administrador</h1>

        <!-- Formulario para agregar emp  leados -->
        <h3>Agregar Nuevo Empleado</h3>
        <form id="add-employee-form">
            <label for="new-employee-id">ID de Empleado:</label>
            <input type="text" id="new-employee-id" required>
            
            <label for="new-employee-name">Nombre del Empleado:</label>
            <input type="text" id="new-employee-name" required>
            
            <button type="submit">Agregar Empleado</button>
        </form>

        <!-- Formulario para eliminar empleados -->
        <h3>Eliminar Empleado</h3>
        <form id="delete-employee-form">
            <label for="delete-employee-id">ID del Empleado:</label>
            <input type="text" id="delete-employee-id" required>
            <button type="submit">Eliminar Empleado</button>
         </form>

        <!-- Formulario para eliminar registro de asistencia -->
        <h3>Eliminar Registro de Asistencia</h3>
        <form id="delete-attendance-form">
            <label for="delete-attendance-id">ID del Empleado:</label>
            <input type="text" id="delete-attendance-id" required>
            <button type="submit">Eliminar Registro</button>
        </form>

        <!-- Formulario para agregar horarios de empleados -->
        <h3>Asignar Horario a Empleado</h3>
        <form id="assign-schedule-form">
            <label for="employee-id-schedule">ID de Empleado:</label>
            <input type="text" id="employee-id-schedule" required>
            
            <label for="check-in-time">Hora de Entrada (HH:MM):</label>
            <input type="time" id="check-in-time" required>
            
            <label for="check-out-time">Hora de Salida (HH:MM):</label>
            <input type="time" id="check-out-time" required>
            
            <button type="submit">Asignar Horario</button>
        </form>

        <!-- Botón para ver el reporte de asistencia -->
        <button id="view-report">Ver Reporte de Asistencia</button>
        <table id="attendance-report" style="display: none;">
            <thead>
                <tr>
                    <th>ID Empleado</th>
                    <th>Nombre</th>
                    <th>Hora de Entrada</th>
                    <th>Hora de Salida</th>
                </tr>
            </thead>
            <tbody>
                <!-- El reporte se llenará dinámicamente -->
            </tbody>
        </table>

        <!-- Enlace para regresar al checador de empleados -->
        <div class="admin-link">
            <a href="index.php">Volver al Checador de Asistencia</a>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
