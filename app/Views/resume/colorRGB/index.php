<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpeg" href="<?= base_url('images/colorRGB/rgb.jpeg')?>">
    <!-- <link rel="stylesheet" href="<?= base_url('css/pizzeria/index.css') ?>"> -->
    <title>Color RBG</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
    }

    body{
        height: 100vh;
        display: flex;
        background-color: rgb(23, 41, 56);
        text-align: center;
        justify-content: center;
        align-items: center;
    }

    .contenedor-principal{
        display: flex;
        align-items: center;
        width: 50vw;
        max-width: 300px;
        min-height: 150px;
        justify-content: center;
        background-color: white;
        border-radius: 20px;
    }

    .color{
        padding: 20px;
        margin: 10px;
        font-size: 2em;
        font-weight: bold;
        font-family: Georgia, 'Times New Roman', Times, serif;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
    }

</style>

<body>
    <main>
        <div class="contenedor-principal">
            <div class="contenedor-interno">
                <div class="color">
                    <label for="rojo">Rojo (R)</label>
                    <input type="range" id="rojo" min="0" max="255" value="23" step="1">
                    <p id="texto-rojo"></p>
                </div>

                <div class="color">
                    <label for="verde">Verde (G)</label>
                    <input type="range" id="verde" min="0" max="255" value="41" step="1">
                    <p id="texto-verde"></p>
                </div>

                <div class="color">
                    <label for="azul">Azul (B)</label>
                    <input type="range" id="azul" min="0" max="255" value="56" step="1">
                    <p id="texto-azul"></p>
                </div>

            </div>
        </div>
    </main>
</body>
<!-- <script src="<?= base_url('javascript/pizzeria/index.js') ?>"></script> -->
<script>
  const inputRojo  = document.getElementById("rojo");
  const inputVerde = document.getElementById("verde");
  const inputAzul  = document.getElementById("azul");

  const textoRojo  = document.getElementById("texto-rojo");
  const textoVerde = document.getElementById("texto-verde");
  const textoAzul  = document.getElementById("texto-azul");

  // initialize
  let rojo  = inputRojo.value;
  let verde = inputVerde.value;
  let azul  = inputAzul.value;

  function actualizarColor(r, g, b) {
    document.body.style.backgroundColor = `rgb(${r}, ${g}, ${b})`;
  }

  // set initial numbers & background
  textoRojo.innerText  = rojo;
  textoVerde.innerText = verde;
  textoAzul.innerText  = azul;
  actualizarColor(rojo, verde, azul);

  inputRojo.addEventListener("input", (e) => {
    rojo = e.target.value;                // update outer
    textoRojo.innerText = rojo;
    actualizarColor(rojo, verde, azul);
  });

  inputVerde.addEventListener("input", (e) => {
    verde = e.target.value;               // update outer
    textoVerde.innerText = verde;         // fixed to textoVerde
    actualizarColor(rojo, verde, azul);
  });

  inputAzul.addEventListener("input", (e) => {
    azul = e.target.value;                // update outer
    textoAzul.innerText = azul;
    actualizarColor(rojo, verde, azul);
  });
</script>

</html>