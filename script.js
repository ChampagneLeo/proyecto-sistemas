document.addEventListener("DOMContentLoaded", () => {
    const empleados = {};
    const registrosAsistencia = [];
    const horarios = {};

    // Registrar entrada/salida
    function registrarAsistencia(tipo) {
        const empleadoId = document.getElementById("empleado-id").value;
        if (!empleados[empleadoId]) {
            alert("Empleado no registrado.");
            return;
        }

        const horaActual = new Date().toLocaleTimeString();
        registrosAsistencia.push({ empleadoId, nombre: empleados[empleadoId], tipo, hora: horaActual });
        alert(`${tipo} registrada a las ${horaActual}`);
        document.getElementById("formulario-empleado").reset();
    }

    // Botones de entrada y salida
    if (document.getElementById("registrar-entrada")) {
        document.getElementById("registrar-entrada").addEventListener("click", () => registrarAsistencia("Entrada"));
        document.getElementById("registrar-salida").addEventListener("click", () => registrarAsistencia("Salida"));
    }

    // Agregar empleado
    if (document.getElementById("formulario-agregar-empleado")) {
        document.getElementById("formulario-agregar-empleado").addEventListener("submit", (e) => {
            e.preventDefault();
            const empleadoId = document.getElementById("nuevo-empleado-id").value;
            const empleadoNombre = document.getElementById("nuevo-empleado-nombre").value;
            empleados[empleadoId] = empleadoNombre;
            alert(`Empleado ${empleadoNombre} agregado.`);
            e.target.reset();
        });
    }

    // Eliminar empleado
    if (document.getElementById("formulario-eliminar-empleado")) {
        document.getElementById("formulario-eliminar-empleado").addEventListener("submit", (e) => {
            e.preventDefault();
            const empleadoId = document.getElementById("eliminar-empleado-id").value;
            if (empleados[empleadoId]) {
                delete empleados[empleadoId];
                alert(`Empleado con ID ${empleadoId} eliminado.`);
            } else {
                alert("Empleado no encontrado.");
            }
            e.target.reset();
        });
    }

    // Asignar horario
    if (document.getElementById("formulario-asignar-horario")) {
        document.getElementById("formulario-asignar-horario").addEventListener("submit", (e) => {
            e.preventDefault();
            const empleadoId = document.getElementById("horario-empleado-id").value;
            const horarioAsignado = document.getElementById("horario-hora").value;
            if (empleados[empleadoId]) {
                horarios[empleadoId] = horarioAsignado;
                alert(`Horario de ${horarioAsignado} asignado a empleado con ID ${empleadoId}.`);
            } else {
                alert("Empleado no encontrado.");
            }
            e.target.reset();
        });
    }
});
