<?php
    $tituloPagina = 'Bienvenido';
    include 'inc/header.php';
    include 'inc/navegacion.php';
    include 'inc/conexion.php';
    include 'inc/funciones.php';
?>

    <!-- Slider de imagenes -->
    <div class="container">
        <div id="slider-principal" class="carousel slide mt-4" data-ride="carousel">
     
            <ol class="carousel-indicators">
                <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
                <li data-target="#slider-principal" data-slide-to="1"></li>
                <li data-target="#slider-principal" data-slide-to="2"></li>
            </ol>
            
            <div class="carousel-inner" role="listbox"> 
                <div class="carousel-item active">
                  <img src="img/slide_01.jpg" alt="Nuestras instalaciones">
                  <div class="carousel-caption">
                    <h3 class="text-uppercase">Nuestras Instalaciones</h3>
                  </div>
                </div>
                
                <div class="carousel-item">
                  <img src="img/slide_02.jpg" alt="Conoce nuestros servicios">
                  <div class="carousel-caption">
                    <h3 class="text-uppercase">Conoce nuestros servicios</h3>
                  </div>
                </div>

                <div class="carousel-item">
                  <img src="img/slide_01.jpg" alt="Promociones">
                  <div class="carousel-caption">
                    <h3 class="text-uppercase">Nuevo sitio 2x1 en todos los servicios</h3>
                  </div>
                </div>
            </div> <!--Carousel-->
            
            <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>

            <a href="#slider-principal" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Siguiente</span>
            </a>

            <a href="#slider-principal" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
    <!-- Fin slider de imagenes -->

    <!--  Nuestro sitio -->
    <section class="nuestro-sitio py-5"></section>
        <h1 class="text-center text-uppercase mt-4 encabezado">
            <span class="text-lowercase d-block">Bienvenido a nuestro</span> sitio web
        </h1>
        <p class="text-center mt-4">Te sentiras como nuevo con nuestros <br> masajistas profesionales</p>
    </section>

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-4 text-center mb-4">
                <div class="imagen-servicio">
                    <img src="img/servicio_01.jpg" alt="Servicio" class="img-fluid">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-10 pt-4 servicio-info">
                            <h2 class="text-center text-uppercase encabezado">
                                <span class="text-lowercase d-block">Conoce sobre</span> nosotros
                            </h2>
                            <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4">
                <div class="imagen-servicio">
                    <img src="img/servicio_02.jpg" alt="Servicio" class="img-fluid">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-10 pt-4 servicio-info">
                            <h2 class="text-center text-uppercase encabezado">
                                <span class="text-lowercase d-block">Nuestros</span> servicios
                            </h2>
                            <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4">
                <div class="imagen-servicio">
                    <img src="img/servicio_03.jpg" alt="Servicio" class="img-fluid">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-10 pt-4 servicio-info">
                            <h2 class="text-center text-uppercase encabezado">
                                <span class="text-lowercase d-block">Visita nuestra</span> tienda
                            </h2>
                            <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--Row-->
    </div> <!--Container-->
    <!-- Fin de nuestro sitio-->

    <!--Horario-->
    <div class="horario">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-4">
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
                <div class="col-md-6 bg-horario"></div>
            </div>
        </div>
    </div>
    <!--Fin de horario-->

    <!--Nuestros productos-->
    <section class="container productos py-5">
        <h2 class="encabezado text-center text-uppercase mt-4">
            <span class="text-lowercase d-block">Nuestros</span> productos
        </h2>
        <div class="row py-5">

        <?php
            $muestraProductos = obtenerProductos(4);
            while ($producto = $muestraProductos->fetch_assoc()) {
        ?>
            <div class="col md-3 mb-4">
                <div class="card">
                    <a href="producto.php?id= <?php echo $producto['id']; ?>">
                        <img class="card-img-top" src="img/<?php echo $producto['imagen_mini']; ?>" alt="Producto">
                        <div class="card-body">
                            <h3 class="card-title text-center text-uppercase"> <?php echo $producto['nombre']; ?> </h3>
                            <p class="card-text text-uppercase"> <?php echo $producto['descripcion_corta']; ?> </p>
                            <p class="precio mb-0 lead text-center"> <?php echo $producto['precio']; ?> </p>
                        </div>
                    </a>
                </div><!--card-->
            </div>
           <?php } ?> <!--Cierre del While-->
        </div><!--row-->
    </section>
    <!--Fin de nuestros productos-->

    <!--Realiza una cita-->
    <?php include 'inc/citas.php'; ?>
    <!--Fin realiza una cita-->

<!--Footer-->
<?php
    include 'inc/footer.php';
?>
