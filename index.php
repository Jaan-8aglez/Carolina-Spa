<?php
  include 'templates/header.php';
  include 'templates/navegacion.php';
  include 'inc/funciones.php';
?>

    <div class="container">
        <div id="slider-principal" class="carousel slide mt-4" data-ride="carousel">
           <ol class="carousel-indicators"> <!--Barra de contenido en el slide-->
              <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
              <li data-target="#slider-principal" data-slide-to="1"></li>
              <li data-target="#slider-principal" data-slide-to="2"></li>
           </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/slide_01.jpg" alt="Nuestras Instalaciones">
                    <div class="carousel-caption">
                       <h3 class="text-uppercase">Nuestras Instalaciones</h3>
                    </div>
                </div>
                <div class="carousel-item">
                  <img src="img/slide_02.jpg" alt="Nuestros Servicios">
                  <div class="carousel-caption">
                     <h3 class="text-uppercase">Conoce Nuestros Servicios</h3>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="img/slide_03.jpg" alt="Promocion">
                <div class="carousel-caption">
                   <h3 class="text-uppercase">Nuevo sitio web 2x1</h3>
                </div>
            </div>
            </div> <!--Carousel-inner -->
               <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Anterior</span>
               </a>
               <a href="#slider-principal" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
              </a>
        </div>
    </div>

    <section class="nuevo-sitio py-5">
       <h1 class="text-center text-uppercase mt-2 encabezado"> <!--Uppercase = mayusculas-->
         <span class="text-lowercase d-block">Bienvenido a Nuestro</span> Sitio Web
       </h1> <!--Lowercase = minusculas-->
       <p class="text-center mt-4">Te sentiras como nuevo con nuestros <br>masajistas profesionales.</p>
    </section>
    
    <div class="container mb-5">
        <div class="row"> <!-- con la clase row accedemos a propiedades de grid-->
          <div class="col-md-4 text-center mb-4"> <!--siempre separa el grid del contenido de tu diseño-->
              <div class="imagen-servicio"> <!--clase padre-->
                   <img src="img/servicio_01.jpg" class="img-fluid">
                   <div class="row no-gutters justify-content-center">
                       <div class="col-md-10 pt-4 servicio-info">
                         <h2 class="text-center text-uppercase encabezado">
                           <span class="text-lowercase d-block">Conoce sobre</span>Nosotros
                         </h2>
                         <a href="#" class="btn btn-primary btn-block text-uppercase mt-4">Leer más</a>
                       </div>
                   </div> <!-- row -->
              </div> <!--imagen-destacada-->
          </div> <!-- col-mt-4-->

          <div class="col-md-4 text-center mb-4"> <!--siempre separa el grid del contenido de tu diseño-->
            <div class="imagen-servicio"> <!--clase padre-->
                 <img src="img/servicio_02.jpg" class="img-fluid">
                 <div class="row no-gutters justify-content-center">
                     <div class="col-md-10 pt-4 servicio-info">
                       <h2 class="text-center text-uppercase encabezado">
                         <span class="text-lowercase d-block">Nuestros</span>Servicios
                       </h2>
                       <a href="#" class="btn btn-primary btn-block text-uppercase mt-4">Leer más</a>
                     </div>
                 </div> <!-- row -->
            </div> <!--imagen-destacada-->
        </div> <!-- col-mt-4-->

        <div class="col-md-4 text-center mb-4"> <!--siempre separa el grid del contenido de tu diseño-->
          <div class="imagen-servicio"> <!--clase padre-->
               <img src="img/servicio_03.jpg" class="img-fluid">
               <div class="row no-gutters justify-content-center">
                   <div class="col-md-10 pt-4 servicio-info">
                     <h2 class="text-center text-uppercase encabezado">
                       <span class="text-lowercase d-block">Visita nuestra</span>Tienda
                     </h2>
                     <a href="#" class="btn btn-primary btn-block text-uppercase mt-4">Leer más</a>
                   </div>
               </div> <!-- row -->
          </div> <!--imagen-destacada-->
        </div> <!-- col-mt-4-->
      </div>
    </div>

    <div class="horario">
      <div class="container">
         <div class="row">
             <div class="col-md-6 col-12 p-4">
                   <h2 class="text-center text-uppercase mt-4">Horarios</h2>
                   <p class="text-center mt-4 lead">Morbi risus mi, feugiat non nulla eu, dapibus sagittis turpis. Praesent vel dignissim libero. Morbi vel porttitor orci. Integer non elit eu odio vulputate aliquet at sed odio.</p>
                    <!--La clase lead da un estilo mas grande que el texto normal-->
                  <table class="table table-hover text-center mt-5">
                       <thead> <!--Encabezado de la tabla-->
                           <tr>
                               <th class="text-center">Día</th>
                               <th class="text-center">De</th>
                               <th class="text-center">Hasta</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                              <td>Lunes</td>
                               <td>09:00</td>
                               <td>19:00</td>
                           </tr>
                           <tr>
                               <td>Martes</td>
                               <td>09:00</td>
                               <td>19:00</td>
                           </tr>
                           <tr>
                               <td>Miércoles</td>
                               <td>09:00</td>
                               <td>19:00</td>
                           </tr>
                           <tr>
                               <td>Jueves</td>
                               <td>09:00</td>
                               <td>19:00</td>
                           </tr>
                           <tr>
                               <td>Viernes</td>
                               <td>09:00</td>
                               <td>19:00</td>
                           </tr>
                           <tr>
                               <td>Sábado</td>
                               <td>10:00</td>
                               <td>14:00</td>
                           </tr>
                           <tr>
                               <td>Domingo</td>
                               <td>Cerrado</td>
                               <td>Cerrado</td>
                           </tr>
                       </tbody>
                  </table>
            </div>
            <div class="col-md-6 col-12 bg-horario "></div>
         </div> <!--.row-->
      </div><!--.container-->
    </div>

    <section class="productos container py-5">
      <h2 class="encabezado text-center text-uppercase mt-2">
        <span class="text-lowercase d-block">nuestros</span>productos
      </h2>
      <div class="row py-5">
        <?php
          $productos = obtenerProductos(4);
           while($producto = $productos->fetch_assoc() ) {
           echo "<pre>";
           var_dump($producto);
           echo "</pre>";  
        ?>

        <div class="col-md-3">
            <div class="card">
                <a href="producto.php?id=<?php echo $producto['id'];?>">
                  <img class="card-img-top" src="img/<?php echo $producto['imagen_mini'];?>">
                    <div class="card-body">
                      <h3 class="card-title text-center text-uppercase"><?php echo $producto['nombre'];?></h3>
                      <p class="card-text text-uppercase"><?php echo $producto['descripcion_corta'];?></p>
                      <p class="precio lead text-center mb-0"><?php echo $producto['precio'];?></p>
                    </div>
                </a>
            </div>
        </div>  <!--col-md-3-->
        <?php  } ?>
      </div><!--.row-->
    </section>

    <div class="citas container-fluid py-5">
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