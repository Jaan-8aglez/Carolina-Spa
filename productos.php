<?php
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>

    <div class="container pt-4">
       <div class="row no-gutters">
           <div class="col-12 hero">
              <img src="img/productos.jpg" class="img-fluid">
              <h2 class="text-uppercase d-none d-md-block py-3 px-5">Productos</h2> <!--en un tamaño de pantalla mediana se va a mostrar este titulo-->
              <!--Py- largo del rectangulo Px- ancho -->
            </div>
       </div>
    </div>

    <div class="container pt-4 productos"> <!--accede a loos estilos de grid-->
      <div class="row">
          <main class="col-lg-12 contenido-principal">
             <h2 class="d-block d-md-none text-uppercase text-center">Productos</h2> 
             <!--en un tamaño de pantalla pequeño se va a mostrar este titulo-->
              
            <div class="row">
              <div class="card-columns">
                <div class="card">
                  <a href="producto.html">
                    <img src="img/producto_mini_01.jpg" class="card-img-top img-fluid">
                     <div class="card-body">
                       <h3 class="card-title text-center text-uppercase">Producto 1</h3>
                       <p class="card-text text-uppercase">Descripcion 1</p>
                       <p class="precio lead text-center mb-0">$50</p>
                     </div>
                  </a>
                </div> <!--Card 1-->
                <div class="card">
                  <a href="#">
                    <img src="img/producto_mini_02.jpg" class="card-img-top img-fluid">
                     <div class="card-body">
                       <h3 class="card-title text-center text-uppercase">Producto 2</h3>
                       <p class="card-text text-uppercase">Descripcion 2</p>
                       <p class="precio lead text-center mb-0">$50</p>
                     </div>
                  </a>
                </div> <!--Card 2-->
                <div class="card">
                  <a href="#">
                    <img src="img/producto_mini_03.jpg" class="card-img-top img-fluid">
                     <div class="card-body">
                       <h3 class="card-title text-center text-uppercase">Producto 3</h3>
                       <p class="card-text text-uppercase">Descripcion 3</p>
                       <p class="precio lead text-center mb-0">$50</p>
                     </div>
                  </a>
                </div> <!--Card 3-->
                <div class="card">
                  <a href="#">
                    <img src="img/producto_mini_04.jpg" class="card-img-top img-fluid">
                     <div class="card-body">
                       <h3 class="card-title text-center text-uppercase">Producto 4</h3>
                       <p class="card-text text-uppercase">Descripcion 4</p>
                       <p class="precio lead text-center mb-0">$50</p>
                     </div>
                  </a>
                </div> <!--Card 4-->
                <div class="card">
                  <a href="#">
                    <img src="img/producto_mini_05.jpg" class="card-img-top img-fluid">
                     <div class="card-body">
                       <h3 class="card-title text-center text-uppercase">Producto 5</h3>
                       <p class="card-text text-uppercase">Descripcion 5</p>
                       <p class="precio lead text-center mb-0">$50</p>
                     </div>
                  </a>
                </div> <!--Card 5-->
                <div class="card">
                  <a href="#">
                    <img src="img/producto_mini_06.jpg" class="card-img-top img-fluid">
                     <div class="card-body">
                       <h3 class="card-title text-center text-uppercase">Producto 6</h3>
                       <p class="card-text text-uppercase">Descripcion 6</p>
                       <p class="precio lead text-center mb-0">$50</p>
                     </div>
                  </a>
                </div> <!--Card 6-->
                <div class="card">
                  <a href="#">
                    <img src="img/producto_mini_07.jpg" class="card-img-top img-fluid">
                     <div class="card-body">
                       <h3 class="card-title text-center text-uppercase">Producto 7</h3>
                       <p class="card-text text-uppercase">Descripcion 7</p>
                       <p class="precio lead text-center mb-0">$50</p>
                     </div>
                  </a>
                </div> <!--Card 1-->
                <div class="card">
                  <a href="#">
                    <img src="img/producto_mini_08.jpg" class="card-img-top img-fluid">
                     <div class="card-body">
                       <h3 class="card-title text-center text-uppercase">Producto 8</h3>
                       <p class="card-text text-uppercase">Descripcion 8</p>
                       <p class="precio lead text-center mb-0">$50</p>
                     </div>
                  </a>
                </div> <!--Card 8-->
                <div class="card">
                  <a href="#">
                    <img src="img/producto_mini_01.jpg" class="card-img-top img-fluid">
                     <div class="card-body">
                       <h3 class="card-title text-center text-uppercase">Producto 9</h3>
                       <p class="card-text text-uppercase">Descripcion 9</p>
                       <p class="precio lead text-center mb-0">$50</p>
                     </div>
                  </a>
                </div> <!--Card 9-->
              </div> <!--Card columns-->
            </div> <!--row-->
          </main>
      </div>
    </div>
 
<?php
  include 'templates/footer.php';
?>