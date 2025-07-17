<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Registro</h2>
    <div class="contenedor">
        <form action="<?= base_url('/registrar') ?>" method="post">
            <div class="nombre">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" require>
            </div>
            <div class="apellido">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" require>
            </div>
                        <div class="cedula">
                <label for="cedula">Cedula</label>
                <input type="text" name="cedula" id="cedula" require>
            </div>
                        <div class="password">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" require>
            </div>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>

</html>