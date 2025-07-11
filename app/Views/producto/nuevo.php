<?php

use App\Controllers\Producto;

 echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>

<!-- code for forms -->


<div class="container-fluid" style="width: 70%; margin: 0 auto;">
<h2 class="mb-4">Nuevo Producto</h2 class="mb-4">
<?php echo validation_list_errors() ?>
<form action="<?php echo base_url("producto/guarda")?>" method="POST">

  <div class="mb-3">
    <label for="codigo" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo set_value("codigo"); ?>" >

  </div>

  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo set_value("nombre"); ?>">
  </div>

  <div class="mb-3">
    <label for="precio" class="form-label">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio" value="<?php echo set_value("precio", "0,00"); ?>>
  </div>

  <div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <input type="number" class="form-control" id="stock" name="stock" value="<?php echo set_value("stock"); ?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<!-- END code for search -->
<?php echo $this->endSection(); ?>