<?php

use App\Controllers\Producto;

 echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>

<!-- code for search -->

<div class="container" style="width: 70%; margin: 0 auto;">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th>Almacen</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $producto): ?>
            <tr>
                <td><?= $producto["id"]; ?></td>
                <td><?= $producto["codigo"] ?></td>
                <td><?= $producto["nombre"] ?></td>
                <td><?= $producto["stock"] ?></td>
                <td><?= $producto["almacen"] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- END code for search -->
<?php echo $this->endSection(); ?>