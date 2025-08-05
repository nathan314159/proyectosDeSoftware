
$(document).ready(function () {
    $("#formulario").on("submit", function (e) {
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



$(document).ready(function () {
    $(".delete-form").submit(function (e) {
        e.preventDefault(); // No envía el formulario de forma tradicional

        const form = $(this);
        const id = form.find("input[name='id_users_rol']").val();
        // console.log("ID del rol a eliminar:", id);
        // console.log("form:", form);

        let baseURL = window.document.location.origin + "/" + window.location.pathname.split("/")[1];
        console.log("baseURL:", baseURL);

        if (confirm("¿Estás seguro de eliminar este rol?")) {
            $.ajax({
                data: { id: id },
                url: baseURL + "/admin/deleteUserRol/",
                type: "GET",

                success: function (response) {
                    location.reload(); // refresca la tabla
                },
                error: function (xhr, status, error) {
                    // console.log("Error status:", status);
                    // console.log("Error detail:", error);
                    // console.log("Server response:", xhr.responseText);
                    alert("Error al eliminar el rol");
                }
            });
        }
    });
});


$(document).ready(function () {
    $(".btnActualizar").click(function (e) {
        e.preventDefault();

        // Encuentra la fila <tr> más cercana al botón clicado
        const row = $(this).closest("tr");

        // Obtiene los valores desde esa fila
        const id = row.find("input[name='id_users_rol']").val();
        const role = row.find("input[name='id_rol']").val(); // O puedes usar un <select> si lo tienes
  

        console.log("ID del rol:", id);
        console.log("Nuevo rol:", role);

        let baseURL = window.document.location.origin + "/" + window.location.pathname.split("/")[1];

        $("#modalParentesco").modal("show");
        $.ajax({
            data: {
                id_users_rol: id,
                role: role
            },
            url: baseURL + "/admin/updateUserRol",
            type: "POST",
            success: function (response) {
                console.log("Respuesta del servidor:", response);
                //location.reload();
            },
            error: function (xhr, status, error) {
                alert("Error al actualizar el rol");
            }
        });
    });
});






