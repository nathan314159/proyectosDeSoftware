
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

    $(".btnActualizar").click(function () {
        const row = $(this).closest("tr");

        const idUsersRol = row.find(".id_users_rol").val();
        const idUsers = row.find(".id_users").val();
        const idRol = row.find(".id_rol").val();

        // Pre-fill modal fields
        $("#edit_id_users_rol").val(idUsersRol);
        $("#edit_user").val(idUsers);   // Selects correct user
        $("#edit_role").val(idRol);     // Selects correct role

        // Show modal
        $("#modalParentesco").modal("show");
    });


    // Envío del formulario con AJAX
    $("#form-edit").submit(function (e) {
        e.preventDefault();

        // const id = $("#id_users_rol").val();
        // const role = $("#role").val();
        let id = $("#edit_id_users_rol").val(); // ID corregido
        let role = $("#edit_role").val();



        let baseURL = window.document.location.origin + "/" + window.location.pathname.split("/")[1];

        $.ajax({
            url: baseURL + "/admin/updateUserRol",
            type: "POST",
            data: {
                id_users_rol: id,
                role: role
            },
            dataType: "json",

            success: function (response) {
                console.log("Respuesta del servidor:", response);
                // const id_users_rol = response;
                // console.log("Respuesta del servidor:", response);
                // console.log("id_users_rol:", id_users_rol);
                // console.log("role:", role);
                $("#modalParentesco").modal("hide");
                // Opcional: actualizar la tabla sin recargar
                location.reload();
            },
            error: function (xhr, status, error) {
                console.log("Error al actualizar el rol: " + error);
            //     console.log("xhr: " + xhr);
            //     console.log("status: " + status);
            //     console.log("Editando: ", id, role);
            }
        });
    });
});







