<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpeg" href="<?= base_url('images/colorAleatorio/iconPaleta.jpeg')?>">
        <link rel="stylesheet" href="<?= base_url('css/colorAleatorio/index.css') ?>">
        <title>Color Aleatorio</title>
    </head>
    <body class="centrar-flex">
        <h1>Color Aleatorio</h1>
        <main>
            <div id="contenedor" class="centrar-flex">
                <p id="color">#2B807B</p>
                <button id="boton-color">Cambiar Color</button>
            </div>
        </main>
        <script src="<?= base_url('javascript/colorAleatorio/index.js') ?>"></script>
    </body>
</html>