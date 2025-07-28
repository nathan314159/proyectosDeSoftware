
$(document).ready(function () {
    $("form").on("submit", function (e) {
        e.preventDefault(); // Previene que se envíe el formulario de forma tradicional

        let user = $("#user").val();
        let role = $("#role").val();

        if (user === "" || role === "") {
            alertify.error("Debes seleccionar un usuario y un rol.");
            return;
        }

        let baseURL = window.document.location.origin + "/" + window.location.pathname.split("/")[1];

        $.ajax({
            url: baseURL + "/admin/assignRolls",
            type: "POST",
            data: {
                user: user,
                role: role
            },
            success: function (response) {
                // Aquí puedes personalizar la respuesta que devuelva tu backend (por ejemplo, JSON)
                alertify.success("Rol asignado exitosamente");

                // Opcionalmente recargar solo la tabla de roles
                setTimeout(() => location.reload(), 1000);
            },
            error: function () {
                alertify.error("Error al asignar el rol.");
            }
        });
    });
});






