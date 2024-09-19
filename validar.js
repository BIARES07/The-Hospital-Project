// validar.js

function validarFormulario() {
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var cedula = document.getElementById("cedula").value;
    var telefono = document.getElementById("telefono").value;
    var email = document.getElementById("email").value;
    var especialidad = document.getElementById("especialidad").value;

      // Validación del nombre y apellido (solo caracteres normales)
      if (!/^[a-zA-Z\s]+$/.test(nombre) || !/^[a-zA-Z\s]+$/.test(apellido)) {
        alert("[ERROR] El nombre y el apellido deben contener solo letras normales sin caracteres especiales (ejemplo: Ñ o tildes y acentos).");
        return false;
    }
    

    // Validación de la cédula (al menos 6 dígitos numéricos)
    if (!/\d{6,}/.test(cedula)) {
        alert("[ERROR] Debe especificar su cedula correctamente, con al menos 6 dígitos.");
        return false;
    }
    

    // Validación del teléfono (prefijos específicos y solo números)
    if (!/^04(14|24|16|26|12)\d{7}$/.test(telefono)) {
        alert("[ERROR] debe especificar un telefono valido que comience con uno de los prefijos (0414, 0424, 0416, 0426 o 0412)");
        return false;
    }

    // Validación del correo electrónico (opcional)
    if (email && !/^[\w.-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/.test(email)) {
        alert("[ERROR] El correo electrónico tiene un formato incorrecto.");
        return false;
    }

    // Validación de la especialidad (no debe ser 'none')
    if (especialidad === "none") {
        alert("[ERROR] Debes seleccionar una especialidad para la cita.");
        return false;
    }

   // Si todas las validaciones son correctas, se muestra una alerta de confirmación
   var confirmacion = confirm("por favor confirme si todos los datos suministrados son correctos, este paso es IRREVERSIBLE cualquier error de información generara retraso en su cita. ¿Esta seguro de que desea continuar?");
   if (confirmacion) {
       // Si el usuario hace clic en "Aceptar", se envía el formulario
       return true;
   } else {
       // Si el usuario hace clic en "Cancelar", no se envía el formulario
       return false;
   }
}

// Asignar la función de validación al evento 'submit' del formulario
document.getElementById("formulario").onsubmit = validarFormulario;
