// Add Your Scripts here
//Script de bootstrap
(function() { 
    'use strict';
    window.addEventListener('load', function() {
      // Seleccionar el formulario para validar
      var forms = document.getElementsByClassName('needs-validation');
      // Validar cada campo y prevenir que se envie
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          event.preventDefault();
          if (form.checkValidity() === false) {
            event.stopPropagation();
          } else {
            var nombre= document.getElementById('nombre').value,
                apellido= document.getElementById('apellido').value,
                email= document.getElementById('email').value,
                telefono= document.getElementById('telefono').value,
                mensaje= document.getElementById('mensaje').value;

                console.log(nombre);
                console.log(apellido);
                console.log(email);
                console.log(mensaje);
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
   