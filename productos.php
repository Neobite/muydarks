<?php
    $tituloPagina = 'Productos';
    include 'inc/header.php';
    include 'inc/navegacion.php';
    include 'inc/funciones.php';
?>

<div class="container pt-4">
      <div class="row no-gutters">
            <div class="col-12 hero">
                  <img src="img/productos.jpg" class="img-fluid" alt="Nosotros">
                  <h2 class="text-uppercase d-block py-3 px-5">Productos</h2>
            </div>
      </div>
</div>

    <!--Contenido-->
    <div class="container pt-4 productos">
            <div class="row">
                   <main class="col-lg-12 contenido-principal">
                         <h2 class="d-blok d-md-none text-uppercase text-center">Productos</h2>
                         <!--Grid productos-->
                         <div class="row no-gutters">
                               <div class="card-columns">

                              <?php
                              $muestraProductos = obtenerProductos();
                              while ($producto = $muestraProductos->fetch_assoc()) {
                              ?>

                                    <div class="card">
                                    <a href="producto.php?id= <?php echo $producto['id']; ?>">
                                                <img src="img/<?php echo $producto['imagen_mini']; ?>  " alt="Producto1" class="card-img-top img-fluid">
                                                <div class="card-body">
                                                      <h3 class="card-title text-center text-uppercase">
                                                            <?php echo $producto['nombre']; ?>
                                                      </h3>
                                                      <p class="card-text text-uppercase">
                                                           <?php echo $producto['descripcion_corta']; ?>
                                                      </p>
                                                      <p class="precio lead text-center mb-0">
                                                           <?php echo $producto['precio']; ?>
                                                      </p>
                                                </div>
                                          </a>
                                    </div>
                                  <?php } ?> <!--Cierre del While-->
                              </div>
                         </div>
                  <!--Fin de la grid de productos-->
                   </main>
            </div>
    </div>
    <!--Fin contenido-->

<!--Footer-->
<?php include 'inc/footer.php' ?>