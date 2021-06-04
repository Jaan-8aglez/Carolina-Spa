<?php
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>

    <div class="container pt-4">
       <div class="row no-gutters">
           <div class="col-12 hero">
              <img src="img/contacto.jpg" class="img-fluid">
              <h2 class="text-uppercase d-none d-md-block py-3 px-5">Contacto</h2> <!--en un tamaño de pantalla mediana se va a mostrar este titulo-->
              <!--Py- largo del rectangulo Px- ancho -->
            </div>
       </div>
    </div>

    <div class="container pt-4"> <!--accede a loos estilos de grid-->
      <div class="row justify-content-center">
        <main class="col-lg-8 contenido-principal">
            <h2 class="d-block d-md-none text-uppercase text-center">Contacto</h2> <!--en un tamaño de pantalla pequeño se va a mostrar este titulo-->
            <h1 class="text-center mt-2 titulo">Tu opinión nos importa</h1>  
          <form class="p-5 mt-3 formulario-contacto needs-validation" novalidate> <!--novalidate desabilita la validacion de HTML-->
              <div class="form-group"> <!--cada input debe estar dentro de esta clase-->
                <label for="nombre">Nombre:</label> <!--el for es como el ID del input-->
                <input type="text" class="form-control" id="nombre" placeholder="Tu nombre*" required>
                <div class="invalid-feedback">
                  El nombre es obligatorio
                </div>
              </div>
              <div class="form-group"> <!--cada input debe estar dentro de esta clase-->
                <label for="apellido">Apellido:</label> <!--el for es como el ID del input-->
                <input type="text" class="form-control" id="apellido" placeholder="Tu apellido*" required>
                <div class="invalid-feedback">
                  El apellido es obligatorio
                </div>
              </div>
              <div class="form-group"> <!--cada input debe estar dentro de esta clase-->
                <label for="email">E-mail:</label> <!--el for es como el ID del input-->
                <input type="email" class="form-control" id="email" placeholder="Tu correo*" required>
                <div class="invalid-feedback">
                  El e-mail es obligatorio
                </div>
              </div>
              <div class="form-group"> <!--cada input debe estar dentro de esta clase-->
                <label for="telefono">Teléfono:</label> <!--el for es como el ID del input-->
                <input type="text" class="form-control" id="telefono" placeholder="Tu telefono*" required>
                <div class="invalid-feedback">
                  El telefono es obligatorio
                </div>
              </div>
              <div class="form-group"> <!--cada input debe estar dentro de esta clase-->
                <label for="mensaje">Mensaje:</label> <!--el for es como el ID del input-->
                <textarea id="mensaje" class="form-control" cols="20" rows="5" required></textarea>
                <div class="invalid-feedback">
                  El mensaje es obligatorio
                </div>
              </div>
              <input type="submit" class="btn btn-primary" value="Enviar">
          </form> 
        </main>
      </div>
    </div>
    
<?php
  include 'templates/footer.php';
?>