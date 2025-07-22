<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <title>Document</title>
</head>

<body>
    <h2>Registro</h2>
    <div class="contenedor">
        <form id="formRegistro">
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
            <button type="button" onclick="registerBtn()">Ingresar</button>
        </form>
    </div>
</body>
<script>
    function registerBtn() {
        let nombreId = $("#nombre").val();
        let apellidoId = $("#apellido").val();
        let cedulaId = $("#cedula").val();
        let passwordId = $("#password").val();
        let verifier = 0;

        const baseURL = // retorna el servidor http local host
            window.document.location.origin +
            "/" +
            window.location.pathname.split("/")[1];

        $.ajax({
            data: {nombre: nombreId, apellido: apellidoId, cedula: cedulaId, password: passwordId},
            url: baseURL + "/auth/registrar",
            type: "post",
            success: function(response) {
                // Handle backend response
                if (response == 1 && verifier == 0) {
                    alertify.success("Usuario registrado exitosamente.");
                    verifier = 1;
                    window.location.href=baseURL+"/auth/registro"
                } else {
                    alertify.error("Error al registrar usuario. El usuario ya existe.");
                }
            },
            error: function() {
                // Handle AJAX or server error
                alertify.error("Error en el servidor o en la solicitud.");
            },
        });

    }
</script>

</html>