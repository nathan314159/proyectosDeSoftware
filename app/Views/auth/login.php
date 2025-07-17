<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>login</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <div class="contenedor">
        <form action="<?= base_url('iniciar-sesion') ?>" method="post">
            <div class="cedula">
                <label for="cedula">Cedula</label>
                <input type="text" name="cedula" id="cedula" require>
            </div>
            <div class="password">
                <label for="password">password</label>
                <input type="text" name="password" id="password" require>
            </div>
            <button type="submit">Ingresar</button>
        </form>
        <div class="link">
            <a href="<?= base_url('/registro') ?>">Registrarse</a>
        </div>
    </div>
</body>

</html>