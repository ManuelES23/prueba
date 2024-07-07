<h1 class="nombre-pagina">Actualizar Cosecha</h1>
<p class="descripcion-pagina">Modifica los valores del formulario</p>

<?php
include __DIR__ . '/../templates/barra.php';
include __DIR__ . '/../templates/alertas.php';
?>

<form class="formulario" method="POST">
    <?php include_once __DIR__ . '/formulario.php' ?>

    <div class="btn-group">
        <input type="submit" class="boton" value="Actualizar Servicio">
        <a href="/cosechas" class="boton-salir">Salir</a>
    </div>

</form>