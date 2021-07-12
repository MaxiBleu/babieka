<?php include('inc/header.php'); ?>

<!-- CAROUSEL================================================================================================================== -->

<section class="container index">
    <h2 class="d-none">Contactanos</h2>
    <div id="miCarousel" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#miCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#miCarousel" data-slide-to="1"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="html/coleccion.html"><img src="imagenes/slide_a.jpg" alt="ver mas" width="1100" height="500"></a>
            </div>
            <div class="carousel-item">
                <a href="html/contacto.html"><img src="imagenes/slide_b.jpg" alt="contactanos" width="1100" height="500"></a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#miCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#miCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>


<main class="container seccion seccion-inf">
    <div class="row">
        <div class="col-md-6">
            <h1 class="titulo">Calidad y diseño</h1>
            <p>En <strong>Babieka</strong> nos preocupamos por qué cada zapato y cada bota salgan de la fábrica cumpliendo los máximos estándares de calidad.<br>
            Queremos que cuando compres un producto nuestro, estes felíz porque hiciste una compra inteligente incorporando a tu vestimenta un artículo de diseño y larga duración. 
            </p>
        </div>
        <div class="col-md-6">
            <img src="imagenes/botas.jpg" alt="Botas" width="600" height="400" class="img-fluid rounded">
        </div>
    </div>
</main>
    
<?php include('inc/footer.php'); ?>    