function init() {
  $('#usuario_form').on('submit', function (e) {
    guardaryeditar(e);
  });
}
function guardaryeditar(e) {
  e.preventDefault();
  var formData = new FormData($('#usuario_form')[0]);

  $.ajax({
    url: '../controller/usuario.php?op=guardar',
    type: 'POST',
    data: formData,
    contentType: false,
    processData: false,
    success: function (datos) {
      console.log(datos);
      if (datos == 'pass') {
        Swal.fire('Mesa de Partes', 'Las Contraseñas no Coinciden ', 'error');
      } else if ((datos = 'correo')) {
        Swal.fire(
          'Mesa de Partes',
          'El Correo Electronico ya esta en uso ',
          'error'
        );
      } else {
        Swal.fire('Mesa de Partes', 'Se Registro Correctamente', 'success');
      }

      $('#usuario_form')[0].reset();
    },
  });
}

init();
