<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="<?= base_url('css/practice.css') ?>">  -->
    <title>El Tímido</title>
</head>

<style>
    body{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    .contenedor-principal{
        display: flex;
        width: 80vw;
        max-width: 600px;
        min-height: 350px;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    /* .inner-content{
        display: flex;
        justify-content: center;
        text-align: center;
        margin-left: 50px;
        padding-left: 10px;
    } */

</style>

<body>
    <main>
        <div class="contenedor-principal">
            <h1>contenedor-principal</h1>
            <div class="inner-content">
            <h1>inner-content</h1>
            </div>
        </div>

    </main>

    <footer><small>Sin derechos de autor</small></footer>
</body>
</html>
