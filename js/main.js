function validarFormulario() {
    // Obtiene los valores de los campos del formulario
    var nombres = document.getElementById("names").value;
    var nombreEmpresa = document.getElementById("companyNames").value;
    var telefono = document.getElementById("phoneNumber").value;
    var correoEmpresa = document.getElementById("companyEmail").value;
    var solucion = document.getElementsByName("Type");
    var referido = document.getElementsByName("refere");
    var comentarios = document.getElementById("comentarios").value;
  
    // Valida que los campos no estén vacíos
    if (nombres == "" || nombreEmpresa == "" || telefono == "" || correoEmpresa == "" || comentarios == "") {
      alert("Todos los campos son obligatorios");
      return false;
    }
  
    // var correoValido = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i.test(companyEmail);
    //     if (!correoValido) {
    //         // Mostrar modal de error
    //         document.getElementById("mensaje").textContent = "Por favor, introduzca un correo valido";
    //         $('#modalError').modal('show');
    //         return false;
    //     }

    // Valida que se haya seleccionado al menos una opción de "Solution Type"
    var solucionSeleccionada = false;
    for (var i = 0; i < solucion.length; i++) {
      if (solucion[i].checked) {
        solucionSeleccionada = true;
        break;
      }
    }
    if (!solucionSeleccionada) {
      alert("Debes seleccionar al menos una opción de Solution Type");
      return false;
    }
  
    // Valida que se haya seleccionado una opción de "Refere"
    var referidoSeleccionado = false;
    for (var i = 0; i < referido.length; i++) {
      if (referido[i].checked) {
        referidoSeleccionado = true;
        break;
      }
    }
    if (!referidoSeleccionado) {
      alert("Debes seleccionar una opción de Refere");
      return false;
    }
  
    // Si llega aquí es porque el formulario es válido
    $("#modal-exito").modal('show');
    var URLactual = window.location;
    setTimeout("location.href='"+URLactual+"'", 3000);
  }

  document.getElementById("formulario").addEventListener("submit", function(event) {
    // Prevenir el comportamiento por defecto
    event.preventDefault();
    validarFormulario();
});