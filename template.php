<?php
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>
    <div class="container pt-4">
       <div class="row no-gutters">
           <div class="col-12 hero">
              <img src="img/nosotros.jpg" class="img-fluid">
              <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2> <!--en un tamaño de pantalla mediana se va a mostrar este titulo-->
              <!--Py- largo del rectangulo Px- ancho -->
            </div>
       </div>
    </div>

    <div class="container pt-4"> <!--accede a loos estilos de grid-->
      <div class="row">
          <main class="col-lg-8 contenido-principal">
             <h2 class="d-block d-md-none text-uppercase text-center">Nosotros</h2> <!--en un tamaño de pantalla pequeño se va a mostrar este titulo-->
          </main>

          <aside class="col-lg-4 pt-4 pt-lg-0">
              <div class="sidebar">
                  <h2 class="text-center text-uppercase mt-4">Algo aqui</h2>
              </div>
          </aside>
      </div>
    </div>
    
<?php
  include 'templates/footer.php';
?>