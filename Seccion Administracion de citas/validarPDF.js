// Función para validar el formulario
function validarFormulario() {
    const nombreApellido = document.getElementById("nombre_apellido").value;
    const cedula = document.getElementById("cedula").value;
    const medico = document.getElementById("medico").value;
    const fecha = document.getElementById("fecha").value;
    const especialidad = document.getElementById("especialidad").value;
    const hora = document.getElementById("hora").value;

    // Validación de Nombres y Apellidos
    if (nombreApellido.trim() === "") {
        alert("Por favor, ingresa los Nombres y Apellidos del paciente.");
        return false;
    }

    // Validación de Cédula (puedes ajustar la expresión regular según tus requisitos)
    const cedulaRegex = /^[VEJ]\d{7,8}$/;
    if (!cedula.match(cedulaRegex)) {
        alert("Por favor, ingresa una cédula válida. (Ejemplo: V27748051)");
        return false;
    }

    // Validación de Médico Encargado
    if (medico.trim() === "") {
        alert("Por favor, ingresa el nombre del Médico Encargado.");
        return false;
    }

    // Validación de Fecha (puedes agregar más lógica según tus necesidades)
    if (fecha === "") {
        alert("Por favor, selecciona una fecha para la cita.");
        return false;
    }

    // Validación de Especialidad
    if (especialidad === "none") {
        alert("Por favor, elige una especialidad.");
        return false;
    }

    // Validación de Hora
    if (hora === "none") {
        alert("Por favor, elige una hora para la cita.");
        return false;
    }

    // Si todas las validaciones pasan, puedes enviar el formulario
    return true;
}

// Asigna la función al evento de envío del formulario
document.getElementById("generar_citaPDF").onsubmit = validarFormulario;



