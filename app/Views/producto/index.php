<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>

<div class="container" style="width: 70%; margin: 0 auto;">
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $producto): ?>
            <tr>
                <td><?= $producto['codigo']; ?></td>
                <td><?= $producto['nombre']; ?></td>
                <td><?= $producto['stock']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php echo $this->endSection(); ?>
