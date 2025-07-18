<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="contenedor">
        <h1>Dummy Form</h1>
        <h2>Bienvenido, <?= session()->get('users_nombre') ?></h2>
        <form action="" method="">
            <div class="nombre">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
            </div>
            <div class="apellido">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido">
            </div>
            <div class="cedula">
                <label for="cedula">Cedula</label>
                <input type="text" name="cedula">
            </div>
            <button type="submit">Enviar</button>
        </form>
        <a href="<?= base_url('auth/logout') ?>">Cerrar sesión</a>
    </div>
</body>

</html>