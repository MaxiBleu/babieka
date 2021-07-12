<?php include('inc/header.php'); ?>

<main class="container">
    <section class="row seccion-sup justify-content-center">
        <div class="col-sm-4">
            <h2>Contactanos</h2>
            <p>
                Completá el formulario para recibir el catálogo completo en tu email o para coordinar una visita a nuestro showroom.
            </p>
        </div>
    </section>
    <section class="row seccion-inf justify-content-center" id="formulario">
        <h2 class="d-none">Formulario de contacto</h2>
        <div class="col-sm-4">
            <form action="#" method="get">
                <input type="text" name="nombre" class="rounded" placeholder="Nombre_" required>
                <br>
                <input type="email" name="email" class="rounded" placeholder="Email_" required>
                <br>
                <textarea name="mensaje" rows="5" class="rounded">Mensaje_
                </textarea>
                <br>
                <input type="submit" value="enviar">
            </form>
        </div>
    </section>
</main>

<?php include('inc/footer.php'); ?>