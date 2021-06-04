<?php
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>
    <div class="container pt-4">
       <div class="row no-gutters">
           <div class="col-12 hero">
              <img src="img/servicios.jpg" class="img-fluid">
              <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2> <!--en un tamaño de pantalla mediana se va a mostrar este titulo-->
              <!--Py- largo del rectangulo Px- ancho -->
            </div>
       </div>
    </div>

    <div class="container pt-4"> <!--accede a loos estilos de grid-->
      <div class="row">
          <main class="col-lg-8 contenido-principal">
            <h2 class="d-block d-md-none text-uppercase text-center">Servicios</h2> <!--en un tamaño de pantalla pequeño se va a mostrar este titulo-->
            
            <div id="servicios">
                <div class="card">
                    <div class="card-header" id="servicio1">
                       <h2 class="mb-0">
                         <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1"
                          aria-expanded="true" aria-controls="#descripcion1">Servicio 1 <!-- data-toggle ejecuta codigo de javascript para la funcion de ese elemento-->

                         </button>
                       </h2>
                    </div> <!--Card header-->
                    <div id="descripcion1" class="collapse show" aria-describedby="servicio1" data-parent="#servicios">
                       <div class="card-body">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur inventore ut quod ratione quidem ea delectus, ducimus, amet, saepe officia fuga id? Placeat ex dignissimos laudantium illo repellendus. Maxime, mollitia?</p>

                       </div>
                    </div>
                </div> <!--Card 1-->
                <div class="card">
                  <div class="card-header" id="servicio2">
                     <h2 class="mb-0">
                       <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2"
                        aria-expanded="false" aria-controls="#descripcion2">Servicio 2 <!-- data-toggle ejecuta codigo de javascript para la funcion de ese elemento-->

                       </button>
                     </h2>
                  </div> <!--Card header-->
                  <div id="descripcion2" class="collapse" aria-describedby="servicio2" data-parent="#servicios">
                     <div class="card-body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur inventore ut quod ratione quidem ea delectus, ducimus, amet, saepe officia fuga id? Placeat ex dignissimos laudantium illo repellendus. Maxime, mollitia?</p>

                     </div>
                  </div>
              </div> <!--Card 2-->
              <div class="card">
                <div class="card-header" id="servicio3">
                   <h2 class="mb-0">
                     <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3"
                      aria-expanded="false" aria-controls="#descripcion3">Servicio 3 <!-- data-toggle ejecuta codigo de javascript para la funcion de ese elemento-->
                     </button> 
                   </h2>
                </div> <!--Card header-->
                <div id="descripcion3" class="collapse" aria-describedby="servicio3" data-parent="#servicios">
                   <div class="card-body">
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur inventore ut quod ratione quidem ea delectus, ducimus, amet, saepe officia fuga id? Placeat ex dignissimos laudantium illo repellendus. Maxime, mollitia?</p>

                   </div>
                </div>
            </div> <!--Card 3-->
            </div>
          </main>

          <aside class="col-lg-4 pt-4 pt-lg-0">
              <div class="sidebar p-3">
                  <h2 class="text-center text-uppercase mt-4">Nuevos Clientes</h2>
                  <p class="lead text-center mt-4">Recibe el 20% de descuento con este cupón</p>

                  <div class="cupon px-2 py-2 mt-4"> <!--eje X largo y eje Y ancho-->
                     <p class="text-uppercase text-center">
                       <span class="display-4">20% de Descuento</span> <br> en todos los servicios
                     </p>
                  </div>
              </div>
          </aside>
      </div>
    </div>

    <div class="citas container-fluid py-5 mt-5"> <!--Separacion de 5px-->
      <div class="row justify-content-center">
         <div class="col-md-8 col-lg-6 text-center">
           <h3>Realiza una cita</h3>
           <p class="mt-5">Morbi risus mi, feugiat non nulla eu, dapibus sagittis turpis. Praesent vel dignissim libero. Morbi vel porttitor orci. Integer non elit eu odio vulputate aliquet at sed odio.</p>
            <a href="#" class="btn btn-primary mt-3 btn-lg">Leer más</a>
          </div>
      </div>
    </div>

<?php
  include 'templates/footer.php';
?>