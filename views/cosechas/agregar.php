<h1 class="titulo-pagina">Agregar Cosecha</h1>
<p class="descripcion-pagina">Agregar una nueva Cosecha</p>
<?php
include __DIR__ . '/../templates/alertas.php';
?>

<form action="/cosechas/agregar" class="formulario" method="POST">
    <?php include_once __DIR__ . '/formulario.php' ?>

    <div class="btn-group">
        <input type="submit" class="boton" value="Guardar">
        <a href="/cosechas" class="boton-salir">Salir</a>
    </div>

</form>