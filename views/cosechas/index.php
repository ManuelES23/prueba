<h1 class="nombre-pagina">Cosechas</h1>
<p class="descripcion-pagina">Panel de revision de cosechas</p>

<?php include_once __DIR__ . '/../templates/barra.php' ?>


<a href="/agregar-cosecha" class="boton btn-agregar">Agregar cosecha</a>


<div class="busqueda">
    <form action="" class="formulario">
        <div class="campo">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" value="<?php echo $fecha; ?>">
    </form>
</div>