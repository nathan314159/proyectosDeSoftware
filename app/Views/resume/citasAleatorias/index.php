<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href=""> -->
    <link rel="icon" type="image/jpeg" href="<?= base_url('images/citasAleatorias/OIP.jpeg') ?>">
    <title>Citas Aleatorias</title>
</head>

<style>
    *{padding: 0; margin: 0; box-sizing: border-box; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;}
    /* h1{color: red;} */
    
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 100vh;
        background: url("../../images/citasAleatorias/library.jpeg");
        background-size: cover;         /* 🧩 Scales image to cover the whole page */
        background-position: center;    /* 🧭 Centers the image */
        background-repeat: no-repeat;   /* 🚫 Prevents the image from repeating */
        

    }

    .contenedor-interno{
        display: flex;
        align-items: center;
        align-content: center;
    }

    .contenido-centrado{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
    }

    .contenedor{
        width: 80vw;
        max-width: 600px;
        min-width: 500px;
        padding: 20px;
        background-color: white;
        border: 5px solid black;
        border-radius: 30px;
    }

    /* .contenedor-interno{
        width: 80%;
    } */

    #titulo{
        width: 100%;
        font-weight: bold;
        text-align: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    #cita{
        font-size: 32px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: 10px;
    }

    #autor{
        font-size: 32px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: 10px;
    }

    #botton-cambiar-cita{
        width: 180px;
        height: 50px;
        font-size: 20px;
    }
</style>

<body>
    <main>
        <div class="contenedor contenido-centrado">
            <h1 id="titulo" class="contenido-centrado">Citas Motivacionales</h1>
            <div class="contenedor-interno">
                <div class="contenedor-interno contenido-centrado">
                    <p id="cita" class="contenido-centrado"></p>
                    <p id="autor" class="contenido-centrado"></p>
                    <button type="button" id="botton-cambiar-cita">Siguiente Cita</button>
                </div>
            </div>
        </div>
    </main>
</body>

<script>
    let citas = [
    {
      'autor': 'Albert Einstein',
      'texto': 'No poseo talentos especiales. Solo soy apasionadamente curioso.'
    },
    {
      'autor': 'Anónimo',
      'texto': 'Semanas de programación te pueden ahorrar horas de planeación.'
    },
    {
      'autor': 'Alan Kay',
      'texto': 'La mejor forma de predecir el futuro es inventarlo.'
    },
    {
      'autor': 'Amelia Earhart',
      'texto': 'Lo más dificil es tomar la decisión de actuar. El resto es simplemente tenacidad.'
    },
    {
      'autor': 'Aristotle',
      'texto': 'La calidad no es un acto, es un hábito.'
    },
    {
      'autor': 'Benjamin Franklin',
      'texto': 'Dímelo y lo olvidaré. Enséñamelo y lo recordaré. Involúcrame y lo aprenderé.'
    },
    {
      'autor': 'Charles R. Swindoll',
      'texto': 'La vida es 10% lo que te ocurre y 90% cómo reaccionas.'
    },
    {
      'autor': 'Jane Goodall',
      'texto': 'Lo que haces hace una diferencia. Y debes decidir si qué tipo de diferencia quieres hacer.'
    },
    {
      'autor': 'John Muir',
      'texto': 'El poder de la imaginación nos hace infinitos.'
    },
    {
      'autor': 'Mark Twain',
      'texto': 'Los dos días más importantes de tu vida son el día que naciste y el día que descubres por qué.'
    }
  ];
    const botonElem = document.getElementById("botton-cambiar-cita");
    const citaElem = document.getElementById("cita");
    const autorElem = document.getElementById("autor");

    function generarElemAleatorio(min, max){
        return Math.floor(Math.random() * (max - min) + min)
    }

    function cambiarCita(){
        let indiceAleatorio = generarElemAleatorio(0, citas.length);
        citaElem.innerHTML = `"${citas[indiceAleatorio].texto}"`;
        autorElem.innerHTML = `"${citas[indiceAleatorio].autor}"`;
    }

    botonElem.addEventListener("click", cambiarCita);

    cambiarCita();
</script>

</html>