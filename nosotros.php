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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus magni est ullam quaerat temporibus eum adipisci? Totam temporibus placeat dolores asperiores aperiam suscipit deleniti voluptatem quasi optio. Quisquam, perferendis veniam.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, libero temporibus ad molestiae ut blanditiis ullam, debitis nemo, possimus deleniti fugiat dolore ex autem ab dicta accusamus magni cum porro!</p>
          <h1 class="text-center text-uppercase mt-5 encabezado"> <!--Uppercase = mayusculas-->
            <span class="text-lowercase d-block">Conoce nuestras</span>Instalaciones
          </h1> <!--Lowercase = minusculas-->
          <div class="imagenes pt-4">
            <a href="#" data-target="#imagen_1" data-toggle="modal">
              <img src="img/galeria_mini_01.jpg" class="img-fluid">
            </a>
            <a href="#" data-target="#imagen_2" data-toggle="modal">
              <img src="img/galeria_mini_02.jpg" class="img-fluid">
            </a>
            <a href="#" data-target="#imagen_3" data-toggle="modal">
              <img src="img/galeria_mini_03.jpg" class="img-fluid">
            </a>
            <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
              <!--la clase fade añade una apariencia de desvalecer la imagen-->
               <div class="modal-dialog modal-lg" role="document"> 
                  <div class="modal-content"> <!--añade estilos de modal-->
                    <div class="modal-body">
                      <img src="img/galeria_grande_01.jpg" class="img-fluid">
                    </div> <!--modal body-->
                  </div> <!--modal content-->
               </div>
            </div> <!--Modal un modal es cuando al seleccionar la imagen se expande-->
            <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2" aria-hidden="true">
              <!--la clase fade añade una apariencia de desvalecer la imagen-->
               <div class="modal-dialog modal-lg" role="document"> 
                  <div class="modal-content"> <!--añade estilos de modal-->
                    <div class="modal-body">
                      <img src="img/galeria_grande_02.jpg" class="img-fluid">
                    </div> <!--modal body-->
                  </div> <!--modal content-->
               </div>
            </div>
            <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3" aria-hidden="true">
              <!--la clase fade añade una apariencia de desvalecer la imagen-->
               <div class="modal-dialog modal-lg" role="document"> 
                  <div class="modal-content"> <!--añade estilos de modal-->
                    <div class="modal-body">
                      <img src="img/galeria_grande_03.jpg" class="img-fluid">
                    </div> <!--modal body-->
                  </div> <!--modal content-->
               </div>
            </div>
          </div>
        </main>

        <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start"> <!-- esta clase alinea el contenedor strech abarca todo el container, start lo coloca arriba y end hacia abajo-->
          <div class="sidebar horario">
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
        </aside>
      </div>
    </div>
 
<?php
  include 'templates/footer.php';
?>