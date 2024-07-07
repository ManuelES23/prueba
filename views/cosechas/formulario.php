<div class="campo">
    <label for="fecha">Fecha</label>
    <input type="date" id="fecha" readonly name="fecha" value="<?php echo $fecha; ?>">
</div>
<div class="campo">
    <label for="chofer">Chofer</label>
    <input type="text" id="chofer" placeholder="Nombre del Chofer" name="chofer" value="<?php echo $cosecha->chofer; ?>">
</div>
<div class=" campo">
    <label for="placas">Placas</label>
    <input type="text" id="placas" placeholder="Placas del Camión" name="placas" value="<?php echo $cosecha->placas; ?>">
</div>
<div class=" campo">
    <label for="lote">Lote</label>
    <input type="text" id="lote" placeholder="lote o nombre del Huerto" name="lote" value="<?php echo $cosecha->lote; ?>">
</div>
<div class="campo">
    <label for="kilos">Kilos</label>
    <input type="number" id="kilos" placeholder="Kilos Cargados en el Camión" name="kilos" value="<?php echo $cosecha->kilos; ?>">
</div>
<div class="campo">
    <label for="productor">productor</label>
    <input type="text" id="productor" placeholder="Nombre del propietario del Huerto" name="productor" value="<?php echo $cosecha->productor; ?>">
</div>
<div class="campo">
    <label for="ubicacion">Ubicación</label>
    <input type="text" id="ubicacion" placeholder="Nombre del propietario del Huerto" name="ubicacion" value="<?php echo $cosecha->ubicacion; ?>">
</div>