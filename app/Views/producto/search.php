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
            </tr>
        </thead>
        <tbody>
            <?php foreach($respuesta as $res): ?>
                <tr>
                    <td><?= $res["id"]; ?></td>
                    <td><?= $res["codigo"]; ?></td>
                    <td><?= $res["nombre"]; ?></td>
                    <td><?= $res["stock"]; ?></td>
                </tr>
            <?php endforeach; ?>
            <p><strong>Last Query:</strong> <?= $lastQuery; ?></p>

        </tbody>
    </table>

</div>

<!-- END code for search -->
<?php echo $this->endSection(); ?>