<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/pizzeria/index.css') ?>">
    <link rel="icon" href="<?= base_url('images/pizzeria/iconPizza.jpeg') ?>" type="image/jpeg">


    <title>Nathan'S pizzaria</title>
</head>
<body>
    <div id="contenedor">
        <h3 id="titulo"> 🍕<br> Toppings de Pizzeria</h3>
        <ul id="lista-topping">
            <li class="topping fondo-marron">Aceitunas</li>
            <li class="topping fondo-naranja">Cebolla</li>
            <li class="topping fondo-marron" id="albahaca">Albahaca</li>
            <li class="topping fondo-naranja">Champiñones</li>
        </ul>
    </div>    
    <script src="<?= base_url('javascript/pizzeria/index.js') ?>"></script>

</body>
</html>