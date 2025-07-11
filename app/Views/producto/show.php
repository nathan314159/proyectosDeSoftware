<?php

use App\Controllers\Producto;

 echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>


<div class="container" style="width: 70%; margin: 0 auto;">
    <br>
    <h2>Detalles del producto <?php echo $producto["nombre"]; ?></h2>

</div>

<?php echo $this->endSection(); ?>