<?php
    $tituloPagina = 'Nosotros';
    include 'inc/header.php';
    include 'inc/navegacion.php';
?>

    <!--Contenido-->
    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="img/nosotros.jpg" class="img-fluid" alt="Nosotros">
                <h2 class="text-uppercase d-block py-3 px-5">Nosotros</h2>
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row no-gutters">
            <main class="col-lg-8 contenido-principal">
                <h2 class="d-blok d-md-none text-uppercase text-center">Nosotros</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo vero dignissimos voluptatum magni, quis quod minus nisi ut accusantium commodi at deleniti, sint libero qui omnis reiciendis dicta ratione voluptates amet molestias nihil tempore mollitia quisquam molestiae. Doloremque, sint fugiat harum explicabo iste minima minus ea delectus a pariatur consectetur perspiciatis accusantium saepe, quam labore vitae corporis neque! Hic natus dolorum neque, accusantium repellat voluptatum omnis, placeat doloremque aliquid eos beatae atque corrupti? Voluptatem magni officia dignissimos iure ab optio. Doloremque, sint fugiat harum explicabo iste minima minus ea delectus a pariatur consectetur perspiciatis accusantium saepe, quam labore vitae corporis neque! Hic natus dolorum neque, accusantium repellat voluptatum omnis, placeat doloremque aliquid eos beatae atque corrupti? Voluptatem magni officia dignissimos iure ab optio. Doloremque, sint fugiat harum explicabo iste minima minus ea delectus a pariatur consectetur perspiciatis accusantium saepe, quam labore vitae corporis neque! Hic natus dolorum neque, accusantium repellat voluptatum omnis, placeat doloremque aliquid eos beatae atque corrupti? Voluptatem magni officia dignissimos iure ab optio.</p>

                <h1 class="text-center text-uppercase mt-5 encabezado"><span class="text-lowercase d-block">Conoce nuestras</span> instalaciones</h1>
                <!--Modal-->
                <div class="imagenes pt-4">
                    <a href="#" data-target="#imagen_1" data-toggle="modal">
                      <img src="img/galeria_mini_01.jpg" alt="Imagen de galeria">
                    </a>
                    <a href="#" data-target="#imagen_2" data-toggle="modal">
                      <img src="img/galeria_mini_02.jpg" alt="Imagen de galeria">
                    </a>
                    <a href="#" data-target="#imagen_3" data-toggle="modal">
                      <img src="img/galeria_mini_03.jpg" alt="Imagen de galeria">
                    </a>

                    <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <div class="modal-body">
                                  <img src="img/galeria_grande_01.jpg" class="img-fluid" alt="Galeria 1">
                              </div>
                          </div>                     
                      </div>
                    </div>

                    <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <div class="modal-body">
                                  <img src="img/galeria_grande_02.jpg" class="img-fluid" alt="Galeria 1">
                              </div>
                          </div>                      
                      </div>
                    </div>
                    
                    <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <div class="modal-body">
                                  <img src="img/galeria_grande_03.jpg" class="img-fluid" alt="Galeria 1">
                              </div>
                          </div>                        
                      </div>
                    </div>
                </div>
                <!--Fin modal-->
            </main>
                   
            <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
                <div class="sidebar horario">
                    <h2 class="text-center text-uppercase mt-4">Horarios</h2>
                    <p class="text-center mt-5 lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut repellendus natus ex autem volup tatem provident odio nihil beatae illo tenetur debitis nisi, ipsa est impedit ipsum similique dolorem. Soluta, nisi.</p>

                    <table class="table table-hover text-center mt-5">
                        <thead>
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
                                <td>Sabado</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Domingo</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                        </tbody>
                    </table>
                        
                </div>
            </aside>
        </div>
    </div>
    <!--Fin contenido-->

<!--Footer-->
<?php include 'inc/footer.php' ?>