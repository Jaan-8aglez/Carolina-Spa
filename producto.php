<?php
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>

    <div class="container pt-4">
       <div class="row no-gutters">
           <div class="col-12 hero">
              <img src="img/producto_01.jpg" class="img-fluid">
              <h2 class="text-uppercase d-none d-md-block py-3 px-5">Producto 1</h2> <!--en un tamaño de pantalla mediana se va a mostrar este titulo-->
              <!--Py- largo del rectangulo Px- ancho -->
            </div>
       </div>
    </div>

    <div class="container pt-4"> <!--accede a loos estilos de grid-->
      <div class="row no-gutters">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">Kit Hogar</h2>
          <p>Nulla in orci at est porta egestas id accumsan nisl. Sed cursus ante elit, non dapibus lectus ullamcorper ac. Donec finibus est vitae semper ultrices. Maecenas ante leo, ornare eget feugiat et, dignissim eget erat. Quisque semper felis in ante ornare, in tristique diam scelerisque. Nullam imperdiet luctus porttitor. Curabitur dictum lorem lorem, at facilisis sapien fermentum vel. In commodo arcu felis, id luctus ex bibendum at. Etiam tempus vehicula est eget pellentesque. Morbi quis lorem varius, tincidunt arcu ut, lacinia dolor. Suspendisse ac lacinia metus, et pellentesque justo. Ut nec arcu eu nulla finibus dapibus.\r\n\r\nQuisque arcu odio, consequat a leo eu, lobortis feugiat purus. Phasellus lectus nulla, convallis sit amet sollicitudin ac, placerat vulputate augue. Morbi lorem lectus, tincidunt et quam quis, rhoncus vulputate purus. Etiam ultrices ut justo ut blandit. Suspendisse at nisi eget quam porta tempor sed eu nibh. Suspendisse vehicula bibendum blandit. Curabitur laoreet malesuada commodo. </p>
        </main>
        <aside class="col-lg-4 pt-4 pt-lg-0 descripcion_producto">
          <h3 class="text-uppercase text-center mt-5">Descripción</h3>
          <p class="text-center lead p-3">Descripción corta del Kit de Hogar</p>
    
          <h3 class="text-uppercase text-center mt-2">Precio</h3>
          <p class="display-4 text-center p-3">$ 25.00</p>
        </aside>
      </div>
    </div>
    
<?php
  include 'templates/footer.php';
?>